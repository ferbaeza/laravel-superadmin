<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Usuarios\Domain\Collection\UsuariosAdminCollection;


interface UsuariosDashboardRepositoryInterface
{
    public function getCollection(): UsuariosAdminCollection;
}
