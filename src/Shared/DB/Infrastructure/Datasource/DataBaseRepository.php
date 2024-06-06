<?php

namespace Baezeta\Admin\Shared\DB\Infrastructure\Datasource;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Builder;
use Illuminate\Database\ConnectionInterface;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\ConnectionResolverInterface;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBColumnaEntity;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBTablaAdminEntity;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBColumnasCollection;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBTablasAdminCollection;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasModel;

class DataBaseRepository implements DataBaseRepositoryInterfaces
{
    private ConnectionResolverInterface $connections;


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
        $this->connections = app()->make(ConnectionResolverInterface::class);
        $connection = $this->connections->connection();
        $schema = $connection->getSchemaBuilder();

        return ($this->tables($schema));
    }

    protected function tables(Builder $schema): Collection
    {
        return collect($schema->getTables())->map(fn ($table) => [
            'nombre' => $table['name'],
            'size' => $table['size'],
        ]);
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

            collect(Schema::getColumns($table['nombre']))->map(function ($nombreColumna) use (&$columnasCollection) {


                $columnasCollection->push(new DBColumnaEntity(
                    name: $nombreColumna['name'],
                    typeName: $nombreColumna['type_name'],
                    type: $nombreColumna['type'],
                    nullable: $nombreColumna['nullable'] == 1 ? true : false,
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
