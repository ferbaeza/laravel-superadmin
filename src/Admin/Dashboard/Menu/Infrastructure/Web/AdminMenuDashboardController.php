<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Admin\Dashboard\Menu\Application\CrearMenuDashboard;
use Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Web\Request\AdminMenuDashboardRequest;

class AdminMenuDashboardController extends BaseController
{

    /**
     * Crear Menu Dashboard
     * @return AdminMenuDashboardEntity
     */
    public function crearMenu(AdminMenuDashboardRequest $request)
    {
        dd(20);
        $data = $request->validated();
        $response = BusFacade::process(new CrearMenuDashboard($data['nombre'], $data['codigoPadre']));
        return ApiResponse::success('Listar Menu Dashboard', $response);
    }
}
