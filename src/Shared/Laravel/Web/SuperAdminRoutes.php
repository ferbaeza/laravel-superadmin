<?php

namespace Baezeta\Admin\Shared\Laravel\Web;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Admin\Shared\Routes\AdminRoutes;
use Baezeta\Admin\Shared\Laravel\Web\WebController;
use Baezeta\Admin\Dashboard\Shared\Routes\DashboardRoutes;

abstract class SuperAdminRoutes
{
    public static string $prefix = 'admin';
}


Route::prefix(SuperAdminRoutes::$prefix)
    ->group(function () {
        Route::get('/', [WebController::class, 'show'])->middleware(['web', 'superadmin.dashboard']);
        DashboardRoutes::configure();
        AdminRoutes::configure();
    });
