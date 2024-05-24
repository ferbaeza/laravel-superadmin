<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\MenuDashboardEntity;

class MenuDashboardCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = MenuDashboardEntity::class;
}
