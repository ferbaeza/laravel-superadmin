<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Collection;

use Illuminate\Support\Collection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\TablaEntity;

class TablasCollection extends Collection
{
    protected $type = TablaEntity::class;
}
