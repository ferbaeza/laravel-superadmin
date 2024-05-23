<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\SuperAdminDashboardRepositoryInterface;

class VerificarSuperAdminUsuarioCommandHandler
{
    public function __construct(
        protected SuperAdminDashboardRepositoryInterface $repository
    ) {
    }

    public function run(VerificarSuperAdminUsuarioCommand $command)
    {
        return $this->repository->getEntity($command->email);
    }

}
