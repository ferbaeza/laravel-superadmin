<?php

namespace Baezeta\Admin\Admin\Role\Infrastructure\Bindings;

use Baezeta\Admin\Admin\Role\Infrastructure\Datasource\ListarRoleAdminRepository;
use Baezeta\Admin\Admin\Role\Domain\Interfaces\ListarRoleAdminRepositoryInterface;


class RoleAdminBindings
{
    public static function register(): array
    {
        return [
            ListarRoleAdminRepositoryInterface::class => ListarRoleAdminRepository::class,
        ];
    }
}
