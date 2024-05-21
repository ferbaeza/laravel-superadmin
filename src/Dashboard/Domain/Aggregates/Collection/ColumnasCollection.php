<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Collection;

use Illuminate\Support\Collection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\ColumnaEntity;

class ColumnasCollection extends Collection
{
    protected $type = ColumnaEntity::class;
}
