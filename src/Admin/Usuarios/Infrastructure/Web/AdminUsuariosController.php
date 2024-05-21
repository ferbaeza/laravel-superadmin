<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web;

use Baezeta\Admin\Shared\Bus\BusFacade;
use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Admin\Usuarios\Application\LoginCommand;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\Request\LoginRequest;

class AdminUsuariosController extends BaseController
{
    public function login(LoginRequest $request)
    {
        $data = $request->all();
        $command = new LoginCommand($data['email'], $data['password']);
        $response = BusFacade::process($command);
        return ApiResponse::success('data', $response);
    }

}
