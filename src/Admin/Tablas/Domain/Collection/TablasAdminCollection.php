<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;

class TablasAdminCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = TablaAdminEntity::class;
}
