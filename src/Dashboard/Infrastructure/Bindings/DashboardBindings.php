<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Bindings;

use Baezeta\Admin\Dashboard\Infrastructure\Datasource\AdminDashboardRepository;
use Baezeta\Admin\Dashboard\Domain\Interfaces\AdminDashBoardRepositoryInterface;



class DashboardBindings
{
    public static function register(): array
    {
        return [
            AdminDashBoardRepositoryInterface::class => AdminDashboardRepository::class,
        ];
    }
}
