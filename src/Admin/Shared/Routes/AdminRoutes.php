<?php

namespace Baezeta\Admin\Admin\Shared\Routes;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Admin\Role\Infrastructure\Web\RoleAdminRoutes;
use Baezeta\Admin\Admin\Tablas\Infrastructure\Web\AdminTablasRoutes;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\AdminUsuariosRoutes;
use Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Web\DataTableRoutes;
use Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Web\AdminMenuDashboardRoutes;

class AdminRoutes
{
    public static string $prefix = '';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                AdminUsuariosRoutes::configure();
                AdminMenuDashboardRoutes::configure();
                AdminTablasRoutes::configure();
                RoleAdminRoutes::configure();
                DataTableRoutes::configure();
            });
    }


}
