<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Datasource;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Baezeta\Admin\Dashboard\Domain\Entity\TablaEntity;
use Baezeta\Admin\Dashboard\Domain\Entity\ColumnaEntity;
use Baezeta\Admin\Dashboard\Domain\Collection\TablasCollection;
use Baezeta\Admin\Dashboard\Domain\Collection\ColumnasCollection;
use Baezeta\Admin\Dashboard\Domain\Interfaces\AdminDashBoardRepositoryInterface;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDashboard\SuperAdminDashboardModel;

class AdminDashboardRepository implements AdminDashBoardRepositoryInterface
{
    public function getCollection()
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

        $tablasDDBB->each(function ($table) use (&$tablasColllection){
            $columnasCollection = new ColumnasCollection();
            $tablaEntidad = new TablaEntity(
                table: $table,
                columnas: $columnasCollection
            );

            collect(Schema::getColumns($table))->map(function ($nombreColumna) use (&$columnasCollection){
                $columnasCollection->push(new ColumnaEntity(
                    name: $nombreColumna['name'],
                    typeName: $nombreColumna['type_name'],
                    type: $nombreColumna['type'],
                    nullable:$nombreColumna['nullable']
                ));
            });
            $tablasColllection->push($tablaEntidad);
        });

        return $tablasColllection;
    }
}
