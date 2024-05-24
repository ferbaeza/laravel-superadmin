<?php

namespace Baezeta\Admin\Dashboard\Tablas\Application;

use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasCollection;
use Baezeta\Admin\Dashboard\Tablas\Application\ListarTodosLasTablasQuery;
use Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces\TablasDashboardRepositoryInterface;


class ListarTodosLasTablasQueryHandler
{
    public function __construct(
        protected TablasDashboardRepositoryInterface $tablasRepository,
    ) {
    }

    public function run(ListarTodosLasTablasQuery $query) : TablasCollection
    {
        return $this->tablasRepository->getCollection();
    }
}
