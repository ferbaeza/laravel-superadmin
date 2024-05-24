<?php

namespace Baezeta\Admin\Admin\Shared\Bindings;

use Baezeta\Admin\Admin\Usuarios\Infrastructure\Bindings\SuperAdminDashboardBindings;

class AdminBindings
{
    public static function register(): array
    {
        return array_merge(
            SuperAdminDashboardBindings::register()
        );
    }

}
