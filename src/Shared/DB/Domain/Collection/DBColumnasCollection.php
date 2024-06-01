<?php

namespace Baezeta\Admin\Shared\DB\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Shared\DB\Domain\Entity\DBColumnaEntity;

class DBColumnasCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = DBColumnaEntity::class;
}
