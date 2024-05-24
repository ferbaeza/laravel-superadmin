<?php

namespace Baezeta\Admin\Shared\AAAScalffoldingExample\Infrastructure\Web;

use Illuminate\Support\Facades\Route;

class ExampleRoutes
{
    public static string $prefix = '';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                // Route::post('/crear-menu', [AdminMenuDashboardController::class, 'crearMenu'])->name('crearMenu');
            });
    }
}
