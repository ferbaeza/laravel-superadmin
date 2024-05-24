<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Bindings;

use Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Datasource\AdminMenuDashboardRepository;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Interfaces\AdminMenuDashboardRepositoryInterface;


class AdminMenuDashboardRegisterBindings
{
    public static function register(): array
    {
        return [
            AdminMenuDashboardRepositoryInterface::class => AdminMenuDashboardRepository::class,
        ];
    }

}
