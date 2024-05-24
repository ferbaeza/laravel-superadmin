<?php

namespace Baezeta\Admin\Shared\Exceptions\ValueObjects;

use Baezeta\Admin\Shared\Exceptions\ValueObjects\ValueObjectsbaseException;

class UuidException extends ValueObjectsbaseException
{
    public const MESSAGE = "El UUID %s no cumple el formato";
}
