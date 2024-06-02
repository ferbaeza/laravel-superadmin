<?php

namespace Baezeta\Admin\Admin\Role\Infrastructure\Web;

use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Admin\Role\Infrastructure\Web\RoleAdminController;

class RoleAdminRoutes
{
    public static string $prefix = '';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::get('/roles', [RoleAdminController::class, 'listarRoles'])->name('listarRoles');
                Route::get('/role/{codigoRole}', [RoleAdminController::class, 'obtenerFichaRole'])->name('obtenerFichaRole');
            });
    }
}
