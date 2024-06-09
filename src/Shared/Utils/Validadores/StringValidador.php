<?php

namespace Baezeta\Admin\Shared\Utils\Validadores;

use Baezeta\Admin\Shared\Utils\Validadores\ValidadorBase;

class StringValidador extends ValidadorBase
{
    public function validar(mixed $valor)
    {
        return is_string($valor) && !empty($valor);
    }
}
