<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Tablas\Domain\Entity\TablaDashboardEntity;

class TablasDashboardCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = TablaDashboardEntity::class;
}
