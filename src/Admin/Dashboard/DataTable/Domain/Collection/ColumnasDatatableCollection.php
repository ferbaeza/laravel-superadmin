<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Entity\ColumnasDatatableEntity;

class ColumnasDatatableCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = ColumnasDatatableEntity::class;
}