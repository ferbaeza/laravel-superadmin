<?php

namespace Baezeta\Admin\Admin\Role\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Role\Domain\Entity\RoleAdminEntity;

class RoleAdminCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = RoleAdminEntity::class;
}
