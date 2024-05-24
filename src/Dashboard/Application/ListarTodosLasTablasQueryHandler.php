<?php

namespace Baezeta\Admin\Dashboard\Application;

use Baezeta\Admin\Dashboard\Application\ListarTodosLasTablasQuery;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\TablasCollection;
use Baezeta\Admin\Dashboard\Domain\Interfaces\TablasDashboardRepositoryInterface;

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
