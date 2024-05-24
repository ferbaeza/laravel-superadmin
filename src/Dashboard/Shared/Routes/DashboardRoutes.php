<?php

namespace Baezeta\Admin\Dashboard\Shared\Routes;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Dashboard\Infrastructure\Web\DashboardController;

class DashboardRoutes
{
    public static string $prefix = '/dashboard';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::get('', [DashboardController::class, 'index']);
                Route::get('/usuarios', [DashboardController::class, 'listarUsuarios']);
                Route::get('/tablas', [DashboardController::class, 'listarTablas']);
                Route::get('/menu', [DashboardController::class, 'listarMenu']);
            });
    }
}
