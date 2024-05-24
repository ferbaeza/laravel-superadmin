<?php

namespace Baezeta\Admin\Shared\Exceptions\Usuarios;

use Baezeta\Admin\Shared\Exceptions\Usuarios\UsuarioBaseException;

class UsuarioYaExisteException extends UsuarioBaseException
{
    public const MESSAGE = "Ya existe un usuario superadmin con este email %s en el sistema";
}
