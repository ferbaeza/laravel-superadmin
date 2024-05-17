<?php

namespace Baezeta\Admin\Dashboard\Domain\Collection;

use Illuminate\Support\Collection;
use Baezeta\Admin\Dashboard\Domain\Entity\ColumnaEntity;

class ColumnasCollection extends Collection
{
    protected $type = ColumnaEntity::class;
}
