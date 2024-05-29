<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class ListarTablasCommandHandler
{
    public function __construct(
        protected readonly AdminTablasRepositoryInterface $repositorio
    )
        {
    }

    public function run(ListarTablasCommand $command)
    {
        $this->repositorio->listar();
    }
}
