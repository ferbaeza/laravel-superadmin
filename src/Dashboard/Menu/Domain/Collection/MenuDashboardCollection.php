<?php

namespace Baezeta\Admin\Dashboard\Menu\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Menu\Domain\Entity\MenuDashboardEntity;

class MenuDashboardCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = MenuDashboardEntity::class;
}
