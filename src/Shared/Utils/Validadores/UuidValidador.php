<?php

namespace Baezeta\Admin\Shared\Utils\Validadores;

use Baezeta\Admin\Shared\Utils\Validadores\ValidadorBase;

class UuidValidador extends ValidadorBase
{
    public function validar(mixed $uuid)
    {
        return (str($uuid)->isUuid());
    }
}