<?php

namespace Baezeta\Admin\Shared\Utils\Validadores;

class StringValidador
{

    public function validar(string $valor)
    {
        return is_string($valor) && !empty($valor);
    }
}
