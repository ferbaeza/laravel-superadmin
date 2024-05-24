<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\ColumnaEntity;

class ColumnasCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = ColumnaEntity::class;
}
