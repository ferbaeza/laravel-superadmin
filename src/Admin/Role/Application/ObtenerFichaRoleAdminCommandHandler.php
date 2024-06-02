<?php

namespace Baezeta\Admin\Admin\Role\Application;

use Baezeta\Admin\Admin\Role\Domain\Entity\RoleAdminEntity;
use Baezeta\Admin\Admin\Role\Application\ObtenerFichaRoleAdminCommand;
use Baezeta\Admin\Admin\Role\Domain\Interfaces\ListarRoleAdminRepositoryInterface;

class ObtenerFichaRoleAdminCommandHandler
{
    public function __construct(
        protected readonly ListarRoleAdminRepositoryInterface $repository
    )
        {
    }

    public function run(ObtenerFichaRoleAdminCommand $command): RoleAdminEntity
    {
        return $this->repository->getEntity($command->codigo);
    }
}
