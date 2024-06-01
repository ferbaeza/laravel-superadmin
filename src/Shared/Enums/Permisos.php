<?php

namespace Baezeta\Admin\Shared\Enums;

enum Permisos : string
{
    case DASHBOARD_LEER = 'superadmin/ver';
    case USUARIOS_LEER = 'superadmin/usuarios/ver';
    case USUARIOS_EDITAR = 'superadmin/usuarios/editar';
    case ROLES_LEER = 'superadmin/roles/ver';
    case ROLES_EDITAR = 'superadmin/roles/editar';
    case TABLAS_LEER = 'superadmin/tablas/ver';
    case TABLAS_EDITAR = 'superadmin/tablas/editar';

    public static function permisosBasicos()
    {
        return [
            self::DASHBOARD_LEER->value,
            self:: USUARIOS_LEER->value,
            self:: ROLES_LEER->value,
            self:: TABLAS_LEER->value,
        ];
    }
}