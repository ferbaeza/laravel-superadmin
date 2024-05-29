<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Bindings;

use Baezeta\Admin\Admin\Tablas\Infrastructure\Datasource\AdminTablasRepository;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class AdminTablasRegisterBindings
{
    public static function register(): array
    {
        return [
            AdminTablasRepositoryInterface::class => AdminTablasRepository::class,
        ];
    }
}
