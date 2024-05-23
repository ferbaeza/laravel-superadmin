<?php

namespace Baezeta\Admin\Shared\Laravel\Web;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Shared\Laravel\Web\WebController;
use Baezeta\Admin\Dashboard\Infrastructure\Web\DashboardRoutes;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\AdminUsuariosRoutes;

abstract class SuperAdminRoutes
{
    public static string $prefix = 'admin';
}


Route::prefix(SuperAdminRoutes::$prefix)
    ->group(function () {
        Route::get('/', [WebController::class, 'show'])->middleware(['web', 'superadmin.dashboard']);
        AdminUsuariosRoutes::configure();
        DashboardRoutes::configure();
    });
