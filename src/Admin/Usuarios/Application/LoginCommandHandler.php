<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\SuperAdminDashboardRepositoryInterface;

class LoginCommandHandler
{
    public function __construct(
        protected SuperAdminDashboardRepositoryInterface $repository
    )
    {
    }

    public function run(LoginCommand $loginCommand)
    {
        return $this->repository->loginEmail($loginCommand->getEmail(), $loginCommand->getPassword());
    }
}
