<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Entity\DatosDatatableEntity;

class DatosDatatableCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = DatosDatatableEntity::class;
}
