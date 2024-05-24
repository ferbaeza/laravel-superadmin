<?php

namespace Baezeta\Admin\Dashboard\Tablas\Infrastructure\Bindings;

use Baezeta\Admin\Dashboard\Tablas\Infrastructure\Datasource\TablasDashboardRepository;
use Baezeta\Admin\Dashboard\Tablas\Domain\Interfaces\TablasDashboardRepositoryInterface;


class TablasDashboardBindings
{
    public static function register(): array
    {
        return [
            TablasDashboardRepositoryInterface::class => TablasDashboardRepository::class,
        ];
    }
}
