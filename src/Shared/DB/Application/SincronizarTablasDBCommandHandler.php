<?php

namespace Baezeta\Admin\Shared\DB\Application;

use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;

class SincronizarTablasDBCommandHandler
{
    public function __construct(
        protected readonly ListarTablasDBCommandHandler $listarTablasDBCommandHandler,
        protected readonly DataBaseRepositoryInterfaces $repository
    )
        {
    }

    public function run(SincronizarTablasDBCommand $command)
    {
        $tablas = $this->listarTablasDBCommandHandler->run(new ListarTablasDBCommand());
        $this->repository->sincronizarTablas($tablas);
    }
}
