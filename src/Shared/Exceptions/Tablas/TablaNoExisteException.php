<?php

namespace Baezeta\Admin\Shared\Exceptions\Tablas;

use Baezeta\Admin\Shared\Exceptions\Tablas\TablasBaseException;


class TablaNoExisteException extends TablasBaseException
{
    public const MESSAGE = "La Tabla %s no existe en la base de datos";
}
