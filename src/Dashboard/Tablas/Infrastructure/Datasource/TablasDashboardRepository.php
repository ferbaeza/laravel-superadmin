<?php

namespace Baezeta\Admin\Dashboard\Tablas\Infrastructure\Datasource;

use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\TablaDashboardEntity;
use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasDashboardCollection;
use Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces\TablasDashboardRepositoryInterface;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasModel;

class TablasDashboardRepository implements TablasDashboardRepositoryInterface
{
    public function getCollection(): TablasDashboardCollection
    {
        $tablesSQL = SuperAdminDatabaseTablasModel::all();

        $tablasColllection = new TablasDashboardCollection();

        $tablesSQL->each(function ($table) use (&$tablasColllection) {
            $tablaEntidad = new TablaDashboardEntity(
                id: new UuidValue($table->id),
                nombre: $table->nombre,
            );
            $tablasColllection->push($tablaEntidad);
        });
        return $tablasColllection;
    }
}
