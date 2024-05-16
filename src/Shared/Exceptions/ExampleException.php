<?php

namespace Baezeta\Admin\Shared\Exceptions;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;

class ExampleException extends PackageBaseException
{
    public const MESSAGE = "Ejemplo de mensaje de error";

    protected static $messages = [
        self::class => self::MESSAGE,
    ];
}
