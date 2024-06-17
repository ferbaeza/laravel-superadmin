<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Web;


use Illuminate\Support\Facades\Route;
use Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Web\DataTableController;

class DataTableRoutes
{
    public static string $prefix = '';

    public static function configure(): void
    {
        Route::prefix(self::$prefix)
            ->group(function () {
                Route::get('/datatable/{nombreTabla}', [DataTableController::class, 'datatable'])->name('datatable');
            });
    }
}
