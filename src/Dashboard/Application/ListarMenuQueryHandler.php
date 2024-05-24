<?php

namespace Baezeta\Admin\Dashboard\Application;

use Baezeta\Admin\Dashboard\Domain\Interfaces\MenuDashboardRepositoryInterface;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\MenuDashboardCollection;


class ListarMenuQueryHandler
{
    public function __construct(
        protected MenuDashboardRepositoryInterface $menuRepository
    ) {
    }

    public function run(ListarMenuQuery $query) : MenuDashboardCollection
    {
        return $this->menuRepository->getCollection();
    }

}
