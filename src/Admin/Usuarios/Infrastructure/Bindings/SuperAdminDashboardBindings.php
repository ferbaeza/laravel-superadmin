<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Bindings;

use Baezeta\Admin\Admin\Usuarios\Infrastructure\Datasource\UsuariosAplicacionRepository;
use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\UsuariosAplicacionRepositoryInterface;
use Baezeta\Admin\Admin\Usuarios\Infrastructure\Datasource\SuperAdminDashboardRepository;
use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\SuperAdminDashboardRepositoryInterface;

class SuperAdminDashboardBindings
{
    public static function register(): array
    {
        return [
            SuperAdminDashboardRepositoryInterface::class => SuperAdminDashboardRepository::class,
            UsuariosAplicacionRepositoryInterface::class => UsuariosAplicacionRepository::class,
        ];
    }
}
