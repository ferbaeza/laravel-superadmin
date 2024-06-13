<?php

namespace Baezeta\Admin\Shared\DB\Infrastructure\Datasource;

use stdClass;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Builder;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\ConnectionResolverInterface;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBColumnaEntity;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBTablaAdminEntity;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBColumnasForeignEntity;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBColumnasCollection;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBTablasAdminCollection;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBColumnasForeignCollection;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasModel;

class DataBaseRepository implements DataBaseRepositoryInterfaces
{
    public function insert(string $sql, array $valores) : bool
    {
        return DB::insert($sql, $valores);
    }

    public function getDataTable(string $table): array
    {
        $dataSQL = DB::select("SELECT * FROM $table");
        return $dataSQL;
    }

    public function getDatabaseTablesFromDB(): array
    {
        $tablesSQL = DB::select("
            SELECT *
            FROM information_schema.tables
            WHERE table_schema = 'public'
            AND table_type = 'BASE TABLE'
        ");
        return $tablesSQL;
    }


    public function getDatabaseTables(): Collection
    {
        // $this->connections = app()->make(ConnectionResolverInterface::class);
        // $connection = $this->connections->connection();
        // $schema = $connection->getSchemaBuilder();

        return collect(Schema::getTables())->map(fn ($table) => [
            'nombre' => $table['name'],
            'size' => $table['size'],
        ]);
        // return ($this->tables($schema));
    }

    // protected function tables(Builder $schema): Collection
    // {
    // return collect($schema->getTables())->map(fn ($table) => [
    //     'nombre' => $table['name'],
    //     'size' => $table['size'],
    // ]);
    // }

    public function obtenerReferenciaClaveForanea($nombreTabla, $nombreColumna)
    {
        $result = DB::select("
        SELECT 
            rc.update_rule AS regla_actualizacion,
            rc.delete_rule AS regla_eliminacion,
            kcu.table_name AS tabla,
            kcu.column_name AS columna,
            ccu.table_name AS tabla_referenciada,
            ccu.column_name AS columna_referenciada
        FROM 
            information_schema.table_constraints AS tc 
            JOIN information_schema.key_column_usage AS kcu
            ON tc.constraint_name = kcu.constraint_name
            JOIN information_schema.referential_constraints AS rc 
            ON tc.constraint_name = rc.constraint_name
            JOIN information_schema.constraint_column_usage AS ccu
            ON rc.unique_constraint_name = ccu.constraint_name
        WHERE 
            tc.constraint_type = 'FOREIGN KEY' 
            AND kcu.table_name = ?; 
    ", [$nombreTabla]);

        foreach ($result as $key => $value) {
            if ($value->columna == $nombreColumna) {
                return $value;
            }
        }
  
    }

    public function tieneClaveForanea($nombreTabla, $nombreColumna)
    {
        $result = DB::select("
        SELECT COUNT(*) AS count 
        FROM information_schema.table_constraints AS tc 
        JOIN information_schema.key_column_usage AS kcu
          ON tc.constraint_name = kcu.constraint_name
          AND tc.table_schema = kcu.table_schema
        WHERE tc.constraint_type = 'FOREIGN KEY' 
        AND tc.table_name = ? 
        AND kcu.column_name = ?
    ", [$nombreTabla, $nombreColumna]);

        return $result[0]->count > 0;
    }

    public function getCollection(): DBTablasAdminCollection
    {
        $tablesSQL = self::getDatabaseTables();

        $tablasColllection = new DBTablasAdminCollection();

        $tablesSQL->each(function ($table) use (&$tablasColllection) {
            $columnasCollection = new DBColumnasCollection();
            
            $tablaEntidad = new DBTablaAdminEntity(
                id: UuidValue::create(),
                nombre: $table['nombre'],
                size: $table['size'],
                columnas: $columnasCollection
            );
            $columnas =  collect(Schema::getColumns($table['nombre']));

            $columnas->each(function ($nombreColumna) use (&$columnasCollection, $table) {
                $tieneClaveForanea = $this->tieneClaveForanea($table['nombre'], $nombreColumna['name']);
                $foreignEntity = null;
                if ($tieneClaveForanea) {
                    $referenciaClaveForanea = $this->obtenerReferenciaClaveForanea($table['nombre'], $nombreColumna['name']);

                        $foreignEntity = new DBColumnasForeignEntity(
                            fromTabla : $referenciaClaveForanea->tabla,
                            columnaForeignKey : $nombreColumna['name'],
                            tablaReferencesTo : $referenciaClaveForanea->tabla_referenciada,
                            columnaReferencesTo : $referenciaClaveForanea->columna_referenciada,
                        );
                    }

                    $columnasCollection->push(new DBColumnaEntity(
                    name: $nombreColumna['name'],
                    typeName: $nombreColumna['type_name'],
                    type: $nombreColumna['type'],
                    nullable: $nombreColumna['nullable'] == 1 ? true : false,
                    foreign : $foreignEntity
                ));
            });
            $tablasColllection->push($tablaEntidad);
        });

        return $tablasColllection;
    }

    public function sincronizarTablas(DBTablasAdminCollection $tablas): void
    {
        $tablas->each(function ($tabla) {
            $model = new SuperAdminDatabaseTablasModel();
            $model->id = $tabla->id->value();
            $model->nombre = $tabla->nombre;
            $model->size = $tabla->size;
            $model->columnas = json_encode($tabla->columnas->toArray());
            $model->save();
        });
    }
}
