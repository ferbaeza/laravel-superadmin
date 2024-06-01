<?php

namespace Baezeta\Admin\Shared\DB\Infrastructure\Datasource;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBColumnaEntity;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBTablaAdminEntity;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBColumnasCollection;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBTablasAdminCollection;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasModel;

class DataBaseRepository implements DataBaseRepositoryInterfaces
{
    public function getDatabaseTables(): array
    {
        $tablesSQL = DB::select("
            SELECT table_name
            FROM information_schema.tables
            WHERE table_schema = 'public'
            AND table_type = 'BASE TABLE'
        ");
        return $tablesSQL;
    }

    public function getDataTable(string $table): array
    {
        $dataSQL = DB::select("SELECT * FROM $table");
        return $dataSQL;
    }

    public function sincronizarTablas(DBTablasAdminCollection $tablas): void
    {
        $tablas->each(function ($tabla) {
            $model = new SuperAdminDatabaseTablasModel();
            $model->id = $tabla->id->value();
            $model->nombre = $tabla->table;
            $model->columnas = json_encode($tabla->columnas->toArray());
            $model->save();
        });
    }

    public function getCollection(): DBTablasAdminCollection
    {
        $tablesSQL = self::getDatabaseTables();

        $tablasDDBB = collect($tablesSQL)->map(function ($table) {
            return $table->table_name;
        });

        $tablasColllection = new DBTablasAdminCollection();

        $tablasDDBB->each(function ($table) use (&$tablasColllection) {
            $columnasCollection = new DBColumnasCollection();
            $tablaEntidad = new DBTablaAdminEntity(
                id: UuidValue::create(),
                table: $table,
                columnas: $columnasCollection
            );

            collect(Schema::getColumns($table))->map(function ($nombreColumna) use (&$columnasCollection) {


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
}
