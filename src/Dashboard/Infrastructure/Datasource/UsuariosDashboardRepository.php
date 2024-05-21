<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Datasource;

use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\UsuariosAdminCollection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\UsuarioAdminEntity;
use Baezeta\Admin\Dashboard\Domain\Interfaces\UsuariosDashboardRepositoryInterface;

class UsuariosDashboardRepository implements UsuariosDashboardRepositoryInterface
{
    public function getCollection(): UsuariosAdminCollection
    {
        return new UsuariosAdminCollection(
            new UsuarioAdminEntity('1', 'Usuario 1'),
        );
    }

}
