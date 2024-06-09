<?php

namespace Baezeta\Admin\Shared\Exceptions\Tablas;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;
use Baezeta\Admin\Shared\Exceptions\Tablas\ColumnaNoExisteException;

class TablasBaseException extends PackageBaseException
{
    protected static $messages = [
        TablaNoExisteException::class => TablaNoExisteException::MESSAGE,
        ColumnaNoExisteException::class => ColumnaNoExisteException::MESSAGE,
    ];
}
