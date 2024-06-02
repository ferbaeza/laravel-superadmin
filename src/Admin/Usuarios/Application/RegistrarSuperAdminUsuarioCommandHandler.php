<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

use Baezeta\Admin\Shared\Enums\Roles;
use Baezeta\Admin\Admin\Role\Domain\Entity\RoleAdminEntity;
use Baezeta\Admin\Admin\Usuarios\Domain\Entity\SuperAdminUser;
use Baezeta\Admin\Admin\Role\Application\ObtenerFichaRoleAdminCommand;
use Baezeta\Admin\Shared\Exceptions\Usuarios\UsuarioYaExisteException;
use Baezeta\Admin\Admin\Role\Application\ObtenerFichaRoleAdminCommandHandler;
use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\SuperAdminDashboardRepositoryInterface;

class RegistrarSuperAdminUsuarioCommandHandler
{
    public function __construct(
        protected readonly VerificarSuperAdminUsuarioCommandHandler $verificarUserHandler,
        protected readonly SuperAdminDashboardRepositoryInterface $repository,
        protected readonly ObtenerFichaRoleAdminCommandHandler $obtenerFichaRoleAdminCommandHandler
    ) {
    }


    public function run(RegistrarSuperAdminUsuarioCommand $command)
    {
        $existeSuperAdmin = $this->verificarUserHandler->run(new VerificarSuperAdminUsuarioCommand($command->email));
        if ($existeSuperAdmin) {
            throw UsuarioYaExisteException::drop($command->email);
        }
        
        $roleUsuario = $this->verificarRole($command);
        $user = SuperAdminUser::fromCommand($command, $roleUsuario);
        $this->repository->save($user);
        return $user;
    }
    
    private function verificarRole(RegistrarSuperAdminUsuarioCommand $command) : RoleAdminEntity
    {
        if(is_null($command->codigoRole)){
            return $this->obtenerFichaRoleAdminCommandHandler->run(new ObtenerFichaRoleAdminCommand(Roles::USUARIO->value));
        }
        return $this->obtenerFichaRoleAdminCommandHandler->run(new ObtenerFichaRoleAdminCommand($command->codigoRole));
        
    }

}
