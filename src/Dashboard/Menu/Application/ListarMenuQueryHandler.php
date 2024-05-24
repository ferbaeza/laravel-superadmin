<?php

namespace Baezeta\Admin\Dashboard\Menu\Application;

use Baezeta\Admin\Dashboard\Menu\Domain\Collection\MenuDashboardCollection;
use Baezeta\Admin\Dashboard\Menu\Domain\Interfaces\MenuDashboardRepositoryInterface;



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
