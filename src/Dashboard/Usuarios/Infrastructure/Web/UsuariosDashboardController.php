<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Dashboard\Usuarios\Application\ListarTodosLosUsuariosQuery;

class UsuariosDashboardController extends BaseController
{
    /**
     * listarUsuarios
     * @return UsuariosAdminCollection
     */
    public function listarUsuarios()
    {

        $response = BusFacade::process(new ListarTodosLosUsuariosQuery());
        return ApiResponse::success('Listar Usuarios Dashboard', $response);
    }

}
