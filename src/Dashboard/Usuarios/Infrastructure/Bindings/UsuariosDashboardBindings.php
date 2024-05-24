<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Infrastructure\Bindings;

use Baezeta\Admin\Dashboard\Usuarios\Infrastructure\Datasource\UsuariosDashboardRepository;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Interfaces\UsuariosDashboardRepositoryInterface;


class UsuariosDashboardBindings
{
    public static function register(): array
    {
        return [
            UsuariosDashboardRepositoryInterface::class => UsuariosDashboardRepository::class,
        ];
    }
}
