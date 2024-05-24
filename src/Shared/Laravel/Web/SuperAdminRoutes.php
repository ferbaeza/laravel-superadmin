<?php

namespace Baezeta\Admin\Shared\Laravel\Web;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Admin\Shared\Routes\AdminRoutes;
use Baezeta\Admin\Shared\Laravel\Web\WebController;
use Baezeta\Admin\Dashboard\Shared\Routes\DashboardRoutes;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\AdminUsuariosRoutes;

abstract class SuperAdminRoutes
{
    public static string $prefix = 'admin';
}


Route::prefix(SuperAdminRoutes::$prefix)
    ->middleware(['web', 'superadmin.dashboard'])
    ->group(function () {
        Route::get('/', [WebController::class, 'show']);
        DashboardRoutes::configure();
        // AdminUsuariosRoutes::configure();
        AdminRoutes::configure();
    });
