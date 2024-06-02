<?php

namespace Baezeta\Admin\Admin\Role\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Admin\Role\Application\ListarRolesAdminCommand;
use Baezeta\Admin\Admin\Role\Application\ObtenerFichaRoleAdminCommand;

class RoleAdminController extends BaseController
{

    /**
     * Listar Roles
     * @return RoleAdminCollection
     */
    public function listarRoles()
    {
        $response = BusFacade::process(new ListarRolesAdminCommand());
        return ApiResponse::success('Listar Roles', $response);
    }

    /**
     * Obtener Ficha Role
     * @return RoleAdminEntity
     */
    public function obtenerFichaRole(int $codigoRole)
    {
        $response = BusFacade::process(new ObtenerFichaRoleAdminCommand($codigoRole));
        return ApiResponse::success('Ficha Role', $response);
    }
}
