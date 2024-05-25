<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Constants;

class PermisosConstants
{
    public const DASHBOARD_LEER = 'dashboard/ver';

    public const USUARIOS_LEER = 'dashboard/usuarios/ver';
    public const USUARIOS_EDITAR = 'dashboard/usuarios/editar';
    
    public const ROLES_LEER = 'dashboard/roles/ver';
    public const ROLES_EDITAR = 'dashboard/roles/editar';
    
    public const PERMISOS_LEER = 'dashboard/permisos/ver';
    public const PERMISOS_EDITAR = 'dashboard/permisos/editar';

    public static function getPermisos(): array
    {
        return [
            self::DASHBOARD_LEER ,
            self::USUARIOS_LEER ,
            self::USUARIOS_EDITAR ,
            self::ROLES_LEER ,
            self::ROLES_EDITAR,
            self::PERMISOS_LEER ,
            self::PERMISOS_EDITAR ,
        ];
    }
}
