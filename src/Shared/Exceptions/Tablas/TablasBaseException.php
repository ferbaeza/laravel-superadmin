<?php

namespace Baezeta\Admin\Shared\Exceptions\Tablas;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;
use Baezeta\Admin\Shared\Exceptions\Tablas\ColumnaNoExisteException;
use Baezeta\Admin\Shared\Exceptions\Tablas\ErrorRegistroTablaException;

class TablasBaseException extends PackageBaseException
{
    protected static $messages = [
        TablaNoExisteException::class => TablaNoExisteException::MESSAGE,
        ColumnaNoExisteException::class => ColumnaNoExisteException::MESSAGE,
        ErrorRegistroTablaException::class => ErrorRegistroTablaException::MESSAGE,
    ];
}
