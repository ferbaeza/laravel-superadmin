<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Datasource;

use Baezeta\Admin\Dashboard\Domain\Interfaces\AdminDashBoardRepositoryInterface;

class AdminDashboardRepository implements AdminDashBoardRepositoryInterface
{
    public function getCollection()
    {
        return ['Admin', 'Usuarios'];
    }

}
