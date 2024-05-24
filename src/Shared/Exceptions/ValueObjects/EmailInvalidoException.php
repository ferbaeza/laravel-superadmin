<?php

namespace Baezeta\Admin\Shared\Exceptions\ValueObjects;

use Baezeta\Admin\Shared\Exceptions\ValueObjects\ValueObjectsbaseException;

class EmailInvalidoException extends ValueObjectsbaseException
{
    public const MESSAGE = "El email %s no cumple el formato";
}
