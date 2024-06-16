<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Interfaces;

use Baezeta\Admin\Admin\Usuarios\Domain\Entity\SuperAdminUser;
use Baezeta\Admin\Admin\Usuarios\Domain\Collection\UsuariosAplicacionCollection;

interface SuperAdminDashboardRepositoryInterface
{
    public function getEntity(string $email): bool;
    public function getCollection(): UsuariosAplicacionCollection;
    public function save(SuperAdminUser $user): void;
    public function loginEmail(string $email, string $password, bool $recordar = false):bool | SuperAdminUser ;
}
