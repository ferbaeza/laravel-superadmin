<?php

namespace Baezeta\Admin\Dashboard\Shared\Bindings;

use Baezeta\Admin\Dashboard\Infrastructure\Datasource\MenuDashboardRepository;
use Baezeta\Admin\Dashboard\Domain\Interfaces\MenuDashboardRepositoryInterface;
use Baezeta\Admin\Dashboard\Infrastructure\Datasource\TablasDashboardRepository;
use Baezeta\Admin\Dashboard\Domain\Interfaces\TablasDashboardRepositoryInterface;
use Baezeta\Admin\Dashboard\Infrastructure\Datasource\UsuariosDashboardRepository;
use Baezeta\Admin\Dashboard\Domain\Interfaces\UsuariosDashboardRepositoryInterface;

class DashboardBindings
{
    public static function register(): array
    {
        return [
            TablasDashboardRepositoryInterface::class => TablasDashboardRepository::class,
            UsuariosDashboardRepositoryInterface::class => UsuariosDashboardRepository::class,
            MenuDashboardRepositoryInterface::class => MenuDashboardRepository::class,
        ];
    }
}
