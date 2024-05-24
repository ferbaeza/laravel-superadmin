<?php

namespace Baezeta\Admin\Dashboard\Menu\Infrastructure\Bindings;

use Baezeta\Admin\Dashboard\Menu\Infrastructure\Datasource\MenuDashboardRepository;
use Baezeta\Admin\Dashboard\Menu\Domain\Interfaces\MenuDashboardRepositoryInterface;

class MenuDashboardBindings
{
    public static function register(): array
    {
        return [
            MenuDashboardRepositoryInterface::class => MenuDashboardRepository::class,
        ];
    }
}
