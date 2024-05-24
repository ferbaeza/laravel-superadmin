<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\TablaEntity;

class TablasCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = TablaEntity::class;
}
