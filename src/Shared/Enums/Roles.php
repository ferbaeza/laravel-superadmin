<?php

namespace Baezeta\Admin\Shared\Enums;

enum Roles : int
{
    case SUPERADMIN = 0;
    case ADMIN = 1;
    case USUARIO = 2;

    public function getRoleName(): string
    {
        return match ($this) {
            self::SUPERADMIN => 'Superadmin',
            self::ADMIN => 'Admin',
            self::USUARIO => 'Usuario',
            default => 'Desconocido',
        };
    }
}
