<?php

namespace Baezeta\Admin\Shared\Exceptions\Tablas;

use Baezeta\Admin\Shared\Exceptions\Tablas\TablasBaseException;


class ColumnaNoExisteException extends TablasBaseException
{
    public const MESSAGE = "La Columna %s no existe en la tabla %s de la base de datos";
}
