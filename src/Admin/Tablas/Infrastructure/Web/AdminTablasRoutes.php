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
                Route::get('/tabla/{id}', [AdminTablasController::class, 'listarDetalleTabla'])->name('listarDetalleTabla');
                Route::post('/tabla/{id}', [AdminTablasController::class, 'addRegistroTabla'])->name('addRegistroTabla');
                Route::put('/tabla/{id}', [AdminTablasController::class, 'editarRegistroTabla'])->name('editarRegistroTabla');
                Route::delete('/tabla/{id}', [AdminTablasController::class, 'eliminarRegistroTabla'])->name('eliminarRegistroTabla');
            });
    }

}
