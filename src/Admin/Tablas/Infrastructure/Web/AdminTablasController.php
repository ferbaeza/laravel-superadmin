<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Web;

use Illuminate\Http\Request;
use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Admin\Tablas\Application\ListarTablasCommand;

class AdminTablasController
{
    /**
     * Listar Tablas
     * @return AdminMenuDashboardEntity
     */
    public function listarTablas(Request $request)
    {
        $response = BusFacade::process(new ListarTablasCommand());
        return ApiResponse::success('Listar Tablas', $response);
    }

}
