<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Interfaces;

use Baezeta\Admin\Admin\Usuarios\Domain\Collection\UsuariosAplicacionCollection;

interface UsuariosAplicacionRepositoryInterface
{
    public function getCollection(): UsuariosAplicacionCollection;
}
