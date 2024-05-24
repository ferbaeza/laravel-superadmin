<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Dashboard\Application\DashboardQuery;
use Baezeta\Admin\Dashboard\Application\ListarMenuQuery;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Dashboard\Application\ListarTodosLasTablasQuery;
use Baezeta\Admin\Dashboard\Application\ListarTodosLosUsuariosQuery;

class DashboardController extends BaseController
{
    /**
     * Dashboard
     * @return InfoDashboardEntity
     */
    public function index()
    {
        $response = BusFacade::process(new DashboardQuery());
        return ApiResponse::success('Dashboard', $response);
    }
    /**
     * listarUsuarios
     * @return UsuariosAdminCollection
     */
    public function listarUsuarios()
    {

        $response = BusFacade::process(new ListarTodosLosUsuariosQuery());
        return ApiResponse::success('Listar Usuarios Dashboard', $response);
    }
    /**
     * listarTablas
     * @return TablasCollection
     */
    public function listarTablas()
    {
        $response = BusFacade::process(new ListarTodosLasTablasQuery());
        return ApiResponse::success('Listar Tablas Dashboard', $response);
    }

    /**
     * listarTablas
     * @return MenuDashboardCollection
     */
    public function listarMenu()
    {
        $response = BusFacade::process(new ListarMenuQuery());
        return ApiResponse::success('Listar Menu Dashboard', $response);
    }
}
