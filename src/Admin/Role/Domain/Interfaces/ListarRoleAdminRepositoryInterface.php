<?php

namespace Baezeta\Admin\Admin\Role\Domain\Interfaces;

use Baezeta\Admin\Admin\Role\Domain\Entity\RoleAdminEntity;
use Baezeta\Admin\Admin\Role\Domain\Collection\RoleAdminCollection;

interface ListarRoleAdminRepositoryInterface
{
    public function getEntity(int $codigo): RoleAdminEntity;
    public function getCollection(): RoleAdminCollection;
}
