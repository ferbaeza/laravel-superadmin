<?php

namespace Baezeta\Admin\Dashboard\Shared\Bindings;

use Baezeta\Admin\Dashboard\Menu\Infrastructure\Bindings\MenuDashboardBindings;
use Baezeta\Admin\Dashboard\Tablas\Infrastructure\Bindings\TablasDashboardBindings;
use Baezeta\Admin\Dashboard\Usuarios\Infrastructure\Bindings\UsuariosDashboardBindings;

class DashboardBindings
{
    public static function register(): array
    {
        return  array_merge(
            MenuDashboardBindings::register(),
            TablasDashboardBindings::register(),
            UsuariosDashboardBindings::register()
        );
    }
}
