<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Collection;

use Illuminate\Support\Collection;
use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\UsuarioAdminEntity;

class UsuariosAdminCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = UsuarioAdminEntity::class;
}
