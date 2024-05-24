<?php

namespace Baezeta\Admin\Dashboard\Menu\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Dashboard\Menu\Application\ListarMenuQuery;

class MenuController extends BaseController
{

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
