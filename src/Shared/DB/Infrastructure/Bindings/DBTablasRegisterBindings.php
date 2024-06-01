<?php

namespace Baezeta\Admin\Shared\DB\Infrastructure\Bindings;

use Baezeta\Admin\Shared\DB\Infrastructure\Datasource\DataBaseRepository;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;

class DBTablasRegisterBindings
{
    public static function register(): array
    {
        return[
            DataBaseRepositoryInterfaces::class => DataBaseRepository::class,
        ];
    }

}
