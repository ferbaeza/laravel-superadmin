<?php

namespace Baezeta\Admin\Shared\Laravel\Bindings;

use Baezeta\Admin\Admin\Shared\Bindings\AdminBindings;
use Baezeta\Admin\Dashboard\Shared\Bindings\DashboardBindings;
use Baezeta\Admin\Shared\DB\Infrastructure\Bindings\DBTablasRegisterBindings;


class PackageBindings
{
    public static function registrarBindings(): array
    {
        return array_merge(
            DBTablasRegisterBindings::register(),
            DashboardBindings::register(),
            AdminBindings::register()
        );
    }
}
