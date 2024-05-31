<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class ObtenerDetalleTablaCommandHandler
{
    public function __construct(
        protected readonly AdminTablasRepositoryInterface $repositorio
    )
        {
    }

    public function run(ObtenerDetalleTablaCommand $command)
    {
        return $this->repositorio->getEntity($command->idTabla);
        dd($command);
    }

}
