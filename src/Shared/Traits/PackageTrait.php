<?php

namespace Baezeta\Admin\Shared\Traits;

use Baezeta\Admin\Shared\Laravel\Bindings\PackageBindings;
use Baezeta\Admin\Dashboard\Infrastructure\Bindings\DashboardBindings;

trait PackageTrait
{
    protected function obtenerBindingsPackage(): array
    {
        return PackageBindings::registrarBindings();
    }

}
