<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasDashboardCollection;

interface TablasDashboardRepositoryInterface
{
    public function getCollection(): TablasDashboardCollection;
}
