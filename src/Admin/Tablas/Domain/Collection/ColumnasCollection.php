<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\ColumnaEntity;

class ColumnasCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = ColumnaEntity::class;
}
