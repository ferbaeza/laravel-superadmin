<?php

namespace Baezeta\Admin\Shared\Exceptions\ValueObjects;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;

class ValueObjectsbaseException extends PackageBaseException
{
    protected static $messages = [
        EmailInvalidoException::class => EmailInvalidoException::MESSAGE,
        FechaInvalidaException::class => FechaInvalidaException::MESSAGE,
        UuidException::class => UuidException::MESSAGE,
    ];

}
