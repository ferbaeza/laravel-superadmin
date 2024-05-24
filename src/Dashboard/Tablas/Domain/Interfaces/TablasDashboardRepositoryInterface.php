<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasCollection;

interface TablasDashboardRepositoryInterface
{
    public function getCollection(): TablasCollection;
}
