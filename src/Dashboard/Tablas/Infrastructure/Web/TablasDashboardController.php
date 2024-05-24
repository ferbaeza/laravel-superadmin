<?php

namespace Baezeta\Admin\Dashboard\Tablas\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Dashboard\Tablas\Application\ListarTodosLasTablasQuery;

class TablasDashboardController extends BaseController
{
    /**
     * listarTablas
     * @return TablasCollection
     */
    public function listarTablas()
    {
        $response = BusFacade::process(new ListarTodosLasTablasQuery());
        return ApiResponse::success('Listar Tablas Dashboard', $response);
    }
}
