<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

use Illuminate\Support\Facades\DB;
use Baezeta\Admin\Admin\Usuarios\Domain\Entity\SuperAdminUser;
use Baezeta\Admin\Shared\Exceptions\Usuarios\UsuarioYaExisteException;
use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\SuperAdminDashboardRepositoryInterface;

class RegistrarSuperAdminUsuarioCommandHandler
{
    public function __construct(
        protected VerificarSuperAdminUsuarioCommandHandler $verificarUserHandler,
        protected SuperAdminDashboardRepositoryInterface $repository
    ) {
    }


    public function run(RegistrarSuperAdminUsuarioCommand $command)
    {
        $existeSuperAdmin = $this->verificarUserHandler->run(new VerificarSuperAdminUsuarioCommand($command->email));
        if ($existeSuperAdmin) {
            throw UsuarioYaExisteException::drop($command->email);
        }
        $user = SuperAdminUser::fromCommand($command);
        $this->repository->save($user);
        return $user;
    }

}
