<?php

namespace Baezeta\Admin\Dashboard\Tablas\Infrastructure\Datasource;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\TablaEntity;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\ColumnaEntity;
use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasCollection;
use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\ColumnasCollection;
use Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces\TablasDashboardRepositoryInterface;

class TablasDashboardRepository implements TablasDashboardRepositoryInterface
{
    public function getCollection(): TablasCollection
    {
        $tablesSQL = DB::select("
            SELECT table_name
            FROM information_schema.tables
            WHERE table_schema = 'public'
            AND table_type = 'BASE TABLE'
        ");

        $tablasDDBB = collect($tablesSQL)->map(function ($table) {
            return $table->table_name;
        });

        $tablasColllection = new TablasCollection();

        $tablasDDBB->each(function ($table) use (&$tablasColllection) {
            $columnasCollection = new ColumnasCollection();
            $tablaEntidad = new TablaEntity(
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
