<?php

namespace Baezeta\Admin\Dashboard\Tablas\Infrastructure\Datasource;

use Illuminate\Support\Facades\DB;
use Baezeta\Admin\Shared\DB\Infrastructure\Facade\Database;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\TablaDashboardEntity;
use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasDashboardCollection;
use Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces\TablasDashboardRepositoryInterface;

class TablasDashboardRepository implements TablasDashboardRepositoryInterface
{
    public function getCollection(): TablasDashboardCollection
    {
        $tablesSQL = Database::getDatabaseTables();


        $tablasDDBB = collect($tablesSQL)->map(function ($table) {
            return $table->table_name;
        });
        $tablasColllection = new TablasDashboardCollection();

        $tablasDDBB->each(function ($table) use (&$tablasColllection) {
            $tablaEntidad = new TablaDashboardEntity(
                table: $table,
            );
            $tablasColllection->push($tablaEntidad);
        });
        return $tablasColllection;
    }
}
