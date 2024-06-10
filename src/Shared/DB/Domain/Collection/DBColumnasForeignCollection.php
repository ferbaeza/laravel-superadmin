<?php

namespace Baezeta\Admin\Shared\DB\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBColumnasForeignEntity;

class DBColumnasForeignCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = DBColumnasForeignEntity::class;
}
