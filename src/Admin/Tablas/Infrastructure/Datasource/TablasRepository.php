<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Datasource;

use stdClass;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\TablasRepositoryInterface;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;

final class TablasRepository implements TablasRepositoryInterface
{
    public function __construct(
        protected readonly DataBaseRepositoryInterfaces $dataBaseRepository
    ) {
    }

    public function crearRegistro(stdClass $entidad): stdClass
    {
        $columnas = array_keys((array)$entidad->columnas);
        $valores = array_values((array)$entidad->columnas);

        $sql = "INSERT INTO $entidad->tabla (".implode(',', $columnas).") VALUES (".implode(',', array_fill(0, count($columnas), '?')).")";

        $this->dataBaseRepository->insert($sql , $valores);
        return $entidad;
    }

}
