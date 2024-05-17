<?php

namespace Baezeta\Admin\Dashboard\Domain\Collection;

use Illuminate\Support\Collection;
use Baezeta\Admin\Dashboard\Domain\Entity\TablaEntity;

class TablasCollection extends Collection
{
    protected $type = TablaEntity::class;
}
