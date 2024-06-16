<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Usuarios\Domain\Entity\UsuariosAplicacionEntity;

class UsuariosAplicacionCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = UsuariosAplicacionEntity::class;
}
