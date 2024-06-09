<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use Baezeta\Admin\Admin\Tablas\Domain\Collection\TablasAdminCollection;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class ListarTablasCommandHandler
{
    public function __construct(
        protected readonly AdminTablasRepositoryInterface $repositorio
    )
        {
    }

    public function run(ListarTablasCommand $command): TablasAdminCollection
    {
        $tablasCollection =  $this->repositorio->getCollection();
        return $tablasCollection->filtradas();
    }
}
