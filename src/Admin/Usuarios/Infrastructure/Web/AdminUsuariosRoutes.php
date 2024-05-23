<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web;

use Illuminate\Support\Facades\Route;

class AdminUsuariosRoutes
{
    public static string $prefix = '';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::post('/crear-super-admin', [AdminUsuariosController::class, 'crearSuperAdmin'])->name('superAdmin');
                Route::post('/login', [AdminUsuariosController::class, 'login'])->name('login');
                // Route::post('/login', [AdminUsuariosController::class, 'login'])->name('login');
            });
    }
}
