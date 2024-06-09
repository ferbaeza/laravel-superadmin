<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Interfaces;

use stdClass;

interface TablasRepositoryInterface
{
    public function crearRegistro(stdClass $entidad): stdClass;
}
