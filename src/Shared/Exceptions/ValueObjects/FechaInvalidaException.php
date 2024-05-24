<?php

namespace Baezeta\Admin\Shared\Exceptions\ValueObjects;

use Baezeta\Admin\Shared\Exceptions\ValueObjects\ValueObjectsbaseException;

class FechaInvalidaException extends ValueObjectsbaseException
{
    public const MESSAGE = "La fecha no cumple el formato";
}
