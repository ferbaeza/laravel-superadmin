<?php

namespace Baezeta\Admin\Shared\DB\Application;

use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;

class ListarTablasDBCommandHandler
{
    public function __construct(
        protected readonly DataBaseRepositoryInterfaces $repository
    )
        {
    }

    public function run(ListarTablasDBCommand $command)
    {
        return $this->repository->getCollection();
    }
}
