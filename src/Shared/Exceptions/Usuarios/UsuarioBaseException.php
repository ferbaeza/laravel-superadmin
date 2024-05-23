<?php

namespace Baezeta\Admin\Shared\Exceptions\Usuarios;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;

class UsuarioBaseException extends PackageBaseException
{
    protected static $messages = [
        UsuarioYaExisteException::class => UsuarioYaExisteException::MESSAGE,
    ];
}
