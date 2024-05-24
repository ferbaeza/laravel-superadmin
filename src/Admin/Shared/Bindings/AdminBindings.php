<?php

namespace Baezeta\Admin\Admin\Shared\Bindings;

use Baezeta\Admin\Admin\Usuarios\Infrastructure\Bindings\SuperAdminDashboardBindings;
use Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Bindings\AdminMenuDashboardRegisterBindings;

class AdminBindings
{
    public static function register(): array
    {
        return array_merge(
            SuperAdminDashboardBindings::register(),
            AdminMenuDashboardRegisterBindings::register()
        );
    }

}
