<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\CodigoMenuEntity;

class AdminMenuDashboardCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = CodigoMenuEntity::class;
}
