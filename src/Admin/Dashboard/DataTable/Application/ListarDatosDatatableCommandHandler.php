<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Application;

use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Interfaces\DatatableRepositoryInterface;

class ListarDatosDatatableCommandHandler
{
    public function __construct(
        protected readonly DatatableRepositoryInterface $datatableRepository
    )
        {
    }

    public function run(ListarDatosDatatableCommand $command)
    {
        return $this->datatableRepository->getDataCollection($command->nombreTabla);
    }
}
