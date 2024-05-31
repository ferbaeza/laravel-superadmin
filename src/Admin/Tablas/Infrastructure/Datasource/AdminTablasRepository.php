<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Datasource;

use Illuminate\Support\Facades\Schema;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\ColumnaEntity;
use Baezeta\Admin\Shared\DB\Infrastructure\Facade\Database;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\ColumnasCollection;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\TablasAdminCollection;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class AdminTablasRepository implements AdminTablasRepositoryInterface
{
    public function getEntity(string $idTabla)
    {
        $tabla = 'superadmin_roles';
        $data = Database::getDataTable($tabla);
        dd($data);
        return true;
    }



    public function getCollection(): TablasAdminCollection
    {
        $tablesSQL = Database::getDatabaseTables();

        $tablasDDBB = collect($tablesSQL)->map(function ($table) {
            return $table->table_name;
        });

        $tablasColllection = new TablasAdminCollection();

        $tablasDDBB->each(function ($table) use (&$tablasColllection) {
            $columnasCollection = new ColumnasCollection();
            $tablaEntidad = new TablaAdminEntity(
                id: UuidValue::create(),
                table: $table,
                columnas: $columnasCollection
            );

            collect(Schema::getColumns($table))->map(function ($nombreColumna) use (&$columnasCollection) {


                $columnasCollection->push(new ColumnaEntity(
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
