<?php

namespace Baezeta\Admin\Shared\Utils\Validadores;

class IntegerValidador extends ValidadorBase
{
    public function validar(mixed $valor)
    {
        return is_int($valor);
    }

}
