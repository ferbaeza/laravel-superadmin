<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Admin\Usuarios\Application\LoginCommand;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Admin\Usuarios\Application\LoginCommandHandler;

class AdminUsuariosController extends BaseController
{
    public function __construct(
        protected readonly LoginCommandHandler $loginHandler,
    )
    {
    }

    public function login()
    {
        $command = new LoginCommand();
        $response = BaseController::exec($command, $this->loginHandler);
        return ApiResponse::success('data', $response);
    }

}
