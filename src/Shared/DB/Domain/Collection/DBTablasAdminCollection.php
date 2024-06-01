<?php

namespace Baezeta\Admin\Shared\DB\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBTablaAdminEntity;

class DBTablasAdminCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = DBTablaAdminEntity::class;
}
