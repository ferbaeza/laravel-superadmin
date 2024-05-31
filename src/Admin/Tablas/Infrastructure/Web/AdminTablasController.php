<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Web;

use Illuminate\Http\Request;
use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Admin\Tablas\Application\ListarTablasCommand;
use Baezeta\Admin\Admin\Tablas\Application\ObtenerDetalleTablaCommand;

class AdminTablasController
{
    /**
     * Listar Tablas
     * @return TablasAdminCollection
     */
    public function listarTablas(Request $request) 
    {
        $response = BusFacade::process(new ListarTablasCommand());
        return ApiResponse::success('Listar Tablas', $response);
    }

    /**
     * Listar Detalle Tabla
     * @return TablasAdminCollection
     */
    public function listarDetalleTabla(string  $idTabla)
    {
        $response = BusFacade::process(new ObtenerDetalleTablaCommand($idTabla));
        return ApiResponse::success('Listar Tablas', $response);
    }

}
