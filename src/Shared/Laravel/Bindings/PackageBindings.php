<?php

namespace Baezeta\Admin\Shared\Laravel\Bindings;

use Baezeta\Admin\Admin\Shared\Bindings\AdminBindings;
use Baezeta\Admin\Dashboard\Shared\Bindings\DashboardBindings;


class PackageBindings
{
    public static function registrarBindings(): array
    {
        return array_merge(
            DashboardBindings::register(),
            AdminBindings::register()
        );
    }
}
