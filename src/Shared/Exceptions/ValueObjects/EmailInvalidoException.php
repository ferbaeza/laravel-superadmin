<?php

namespace Baezeta\Admin\Shared\Exceptions\ValueObjects;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;

class EmailInvalidoException extends PackageBaseException
{
    public const MESSAGE = "El email %s no cumple el formato";

    protected static $messages = [
        self::class => self::MESSAGE,
    ];

    public static function porUuid(string $uuid)
    {
        return static::drop($uuid);
    }
}