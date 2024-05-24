<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Entity\UsuarioAdminEntity;

class UsuariosAdminCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = UsuarioAdminEntity::class;
}
