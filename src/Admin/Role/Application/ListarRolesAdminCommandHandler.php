<?php

namespace Baezeta\Admin\Admin\Role\Application;

use Baezeta\Admin\Admin\Role\Application\ListarRolesAdminCommand;
use Baezeta\Admin\Admin\Role\Domain\Collection\RoleAdminCollection;
use Baezeta\Admin\Admin\Role\Domain\Interfaces\ListarRoleAdminRepositoryInterface;

class ListarRolesAdminCommandHandler
{
    public function __construct(
        protected readonly ListarRoleAdminRepositoryInterface $repository
    )
        {
    }

    public function run(ListarRolesAdminCommand $command): RoleAdminCollection
    {
        return $this->repository->getCollection();
    }
}
