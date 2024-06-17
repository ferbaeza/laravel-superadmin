<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Datasource;

use stdClass;
use Baezeta\Admin\Shared\Utils\StringUtils;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Entity\DatosDatatableEntity;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Entity\ColumnasDatatableEntity;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Collection\DatosDatatableCollection;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Collection\ColumnasDatatableCollection;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Interfaces\DatatableRepositoryInterface;

class DatatableRepository implements DatatableRepositoryInterface
{
    public function __construct(
        protected readonly DataBaseRepositoryInterfaces $dataBaseRepository
    ) {
    }

    public function getColumnasCollection(string $nombreTabla): ColumnasDatatableCollection
    {
        $columnas = new ColumnasDatatableCollection();

        $data = $this->dataBaseRepository->getDatabaseInformationColumnFromDB($nombreTabla);

        $fullSize = 1400;
        $totalColumnas = ($data->count());


        $data->each(function ($item) use ($columnas, $totalColumnas, $fullSize) {
            $entidad = new ColumnasDatatableEntity(
                field: StringUtils::minusculas($item['name']),
                headerName: StringUtils::toTitle($item['name']),
                width: $item['name'] == 'id' ? 70 : $fullSize/$totalColumnas ,
            );
            $columnas->add($entidad);
        });
        return $columnas;
    }

    public function getDataCollection(string $nombreTabla): DatosDatatableCollection
    {
        $datos = new DatosDatatableCollection();
        $data = $this->dataBaseRepository->getDataTable($nombreTabla);

        foreach ($data as $registro) {
            $std = new stdClass();
            foreach ($registro as $key => $value) {
                $std->$key = $value;
            }
            $entidad = new DatosDatatableEntity($std);
            $datos->add($entidad);
        }
        return $datos;
    }
}
