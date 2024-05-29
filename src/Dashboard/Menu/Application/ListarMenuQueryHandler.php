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

    public function run(ListarMenuQuery $query) 
    {
        $col = ($this->menuRepository->getCollection());
        // return ($col->getAddedItems());
        return $this->menuRepository->getCollection();
    }

}
