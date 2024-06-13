<?php

namespace Baezeta\Admin\Shared\Exceptions\Tablas;

use Baezeta\Admin\Shared\Exceptions\Tablas\TablasBaseException;


class ErrorRegistroTablaException extends TablasBaseException
{
    public const MESSAGE = "Error al registrar en Tabla %s";
}
