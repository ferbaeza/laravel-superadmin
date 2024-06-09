<?php

namespace Baezeta\Admin\Shared\Utils\Validadores;

use Baezeta\Admin\Shared\Utils\Validadores\ValidadorBase;

class FechaValidador extends ValidadorBase
{

    public function validar(mixed $valor)
    {
        $formato = 'Y-m-d'; // Define el formato de fecha que deseas validar
        $fecha = \DateTime::createFromFormat($formato, $valor);

        // La fecha es válida si: 
        // 1. $fecha no es false, y 
        // 2. La cadena de fecha después de ser formateada coincide con la cadena de fecha original
        return $fecha && $fecha->format($formato) === $valor;
    }
}
