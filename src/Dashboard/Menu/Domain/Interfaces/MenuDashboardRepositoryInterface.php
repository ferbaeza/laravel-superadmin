<?php

namespace Baezeta\Admin\Dashboard\Menu\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Menu\Domain\Collection\MenuDashboardCollection;


interface MenuDashboardRepositoryInterface
{
    public function getCollection(): MenuDashboardCollection;
}
