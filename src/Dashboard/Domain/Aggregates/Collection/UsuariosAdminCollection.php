<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Collection;

use Illuminate\Support\Collection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\UsuarioAdminEntity;

class UsuariosAdminCollection extends Collection
{
    protected $type = UsuarioAdminEntity::class;
}
