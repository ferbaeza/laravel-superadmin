<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Interfaces;

use Baezeta\Admin\Admin\Usuarios\Domain\Entity\SuperAdminUser;

interface SuperAdminDashboardRepositoryInterface
{
    public function getEntity(string $email): bool;
    public function save(SuperAdminUser $user): void;
}
