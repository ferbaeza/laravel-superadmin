<?php

namespace Baezeta\Admin\Shared\AAAScalffoldingExample\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Shared\AAAScalffoldingExample\Application\ExampleCommand;
use Baezeta\Admin\Shared\AAAScalffoldingExample\Infrastructure\Web\Request\ExampleRequest;

class ExampleController extends BaseController
{

    /**
     * Crear Menu Dashboard
     * @return AdminMenuDashboardEntity
     */
    public function crearMenu(ExampleRequest $request)
    {
        $data = $request->validated();
        $response = BusFacade::process(new ExampleCommand($data['nombre'], $data['codigoPadre']));
        return ApiResponse::success('Listar Menu Dashboard', $response);
    }
}
