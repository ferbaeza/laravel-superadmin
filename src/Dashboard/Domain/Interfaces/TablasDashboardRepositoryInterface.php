<?php

namespace Baezeta\Admin\Dashboard\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\TablasCollection;


interface TablasDashboardRepositoryInterface
{
    public function getCollection(): TablasCollection;
}
