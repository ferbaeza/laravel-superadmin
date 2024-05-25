<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Web;

use Illuminate\Support\Facades\Route;

class AdminMenuDashboardRoutes
{
    public static string $prefix = 'dashboard';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::post('/crear-menu', [AdminMenuDashboardController::class, 'crearMenu'])->name('crearMenu');
            });
    }
}
