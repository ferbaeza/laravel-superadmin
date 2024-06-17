<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Application;

use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Interfaces\DatatableRepositoryInterface;

class ListarColumnasDatatableCommandHandler
{
    public function __construct(
        protected readonly DatatableRepositoryInterface $datatableRepository
    )
        {
    }

    public function run(ListarColumnasDatatableCommand $command)
    {
        return $this->datatableRepository->getColumnasCollection($command->nombreTabla);
    }

}
