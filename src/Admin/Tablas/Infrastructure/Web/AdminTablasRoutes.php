<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Web;

use Illuminate\Support\Facades\Route;


class AdminTablasRoutes
{
    public static string $prefix = '';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::get('/listar-tablas', [AdminTablasController::class, 'listarTablas'])->name('listarTablas');
            });
    }

}
