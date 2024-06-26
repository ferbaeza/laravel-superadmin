<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Admin\Usuarios\Application\LoginCommand;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Admin\Usuarios\Application\listarUsuariosCommand;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\Request\LoginRequest;
use Baezeta\Admin\Admin\Usuarios\Application\listarUsuariosDashboardCommand;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\Request\RegistroRequest;
use Baezeta\Admin\Admin\Usuarios\Application\RegistrarSuperAdminUsuarioCommand;

class AdminUsuariosController extends BaseController
{
    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $command = new LoginCommand($data['email'], $data['password']);

        $response = BusFacade::process($command);
        return ApiResponse::success('login', $response);
    }

    public function crearSuperAdmin(RegistroRequest $request)
    {
        $data = $request->validated();
        // dd($data['codigoRole'] ?? "Hello");
        $command = new RegistrarSuperAdminUsuarioCommand($data['nombre'], $data['email'], $data['password'], $data['codigoRole']);

        $response = BusFacade::process($command);
        return ApiResponse::success('Nuevo Usuario SuperAdmin', $response);
    }
    
    /**
     * listarUsuarios Aplicacion
     */

    public function listarUsuarios()
    {
        $command = new listarUsuariosCommand();

        $response = BusFacade::process($command);
        return ApiResponse::success('Nuevo Usuario SuperAdmin', $response);
    }

    /**
     * listarUsuarios Dashboard
     */

    public function listarUsuariosDashboard()
    {
        $command = new listarUsuariosDashboardCommand();

        $response = BusFacade::process($command);
        return ApiResponse::success('Nuevo Usuario SuperAdmin', $response);
    }
}
