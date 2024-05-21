<?php

namespace Baezeta\Admin\Shared\Exceptions\Usuarios;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;

class UsuarioYaExisteException extends PackageBaseException
{
    public const MESSAGE = "Ya existe un usuario superadmin con este email %s en el sistema";

    protected static $messages = [
        self::class => self::MESSAGE,
    ];
}
