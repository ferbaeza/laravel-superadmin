<?php

namespace Baezeta\Admin\Dashboard\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\MenuDashboardCollection;

interface MenuDashboardRepositoryInterface
{
    public function getCollection(): MenuDashboardCollection;
}
