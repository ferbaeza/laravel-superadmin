<?php

namespace Baezeta\Admin\Shared\Laravel\Bindings;

use Baezeta\Admin\Dashboard\Infrastructure\Bindings\DashboardBindings;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Bindings\SuperAdminDashboardBindings;

class PackageBindings
{
    public static function registrarBindings(): array
    {
        return array_merge(
            DashboardBindings::register(),
            SuperAdminDashboardBindings::register(),
        );
    }
}
