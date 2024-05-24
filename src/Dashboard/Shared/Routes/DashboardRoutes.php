<?php

namespace Baezeta\Admin\Dashboard\Shared\Routes;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Dashboard\Shared\Controller\DashboardController;
use Baezeta\Admin\Dashboard\Menu\Infrastructure\Web\MenuController;
use Baezeta\Admin\Dashboard\Main\Infrastructure\Web\MainDashboardController;
use Baezeta\Admin\Dashboard\Tablas\Infrastructure\Web\TablasDashboardController;
use Baezeta\Admin\Dashboard\Usuarios\Infrastructure\Web\UsuariosDashboardController;

class DashboardRoutes
{
    public static string $prefix = '/dashboard';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::get('', [MainDashboardController::class, 'index']);
                /**Usuarios */
                Route::get('/usuarios', [UsuariosDashboardController::class, 'listarUsuarios']);
                /**Tablas */
                Route::get('/tablas', [TablasDashboardController::class, 'listarTablas']);
                /**Menu */
                Route::get('/menu', [MenuController::class, 'listarMenu']);
            });
    }
}
