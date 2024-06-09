<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Web;

use Illuminate\Http\Request;
use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Admin\Tablas\Application\ListarTablasCommand;
use Baezeta\Admin\Admin\Tablas\Application\CrearRegistroTablaCommand;
use Baezeta\Admin\Admin\Tablas\Application\ObtenerDetalleTablaCommand;
use stdClass;

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
     * @return TablaAdminEntity
     */
    public function listarDetalleTabla(string  $idTabla)
    {
        $response = BusFacade::process(new ObtenerDetalleTablaCommand($idTabla));
        return ApiResponse::success('Detalle Tabla', $response);
    }

    /**
     * Crear Registro en Tabla
     * @return stdClass
     */
    public function addRegistroTabla(Request $request, string  $idTabla)
    {
        $command = new stdClass();
        foreach ($request->all() as $key => $value){
            $command->$key = $value;
        }
        unset($command->q);
        $response = BusFacade::process(new CrearRegistroTablaCommand($idTabla, $command));
        return ApiResponse::success('Crear Registro Tabla', $response);
    }

}
