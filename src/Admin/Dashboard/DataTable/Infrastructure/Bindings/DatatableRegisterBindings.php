<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Bindings;

use Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Datasource\DatatableRepository;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Interfaces\DatatableRepositoryInterface;


class DatatableRegisterBindings
{
    public static function register(): array
    {
        return [
            DatatableRepositoryInterface::class => DatatableRepository::class,
        ];
    }
}
