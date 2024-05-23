<?php

namespace Baezeta\Admin\Dashboard\Domain\Interfaces;

use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\UsuariosAdminCollection;

interface UsuariosDashboardRepositoryInterface
{
    public function getCollection(): UsuariosAdminCollection;
}
