<?php

namespace Baezeta\Admin\Shared\Exceptions\Shared;

use Baezeta\Admin\Shared\Exceptions\Shared\CustomBaseExceptions;

class ValidadorException extends CustomBaseExceptions
{
    public const MESSAGE = "Error de validación del campo %s";

}
