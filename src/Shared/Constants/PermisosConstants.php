<?php

namespace Baezeta\Admin\Shared\Constants;

class PermisosConstants
{
    public const DASHBOARD_LEER = 'superadmin/ver';

    public const USUARIOS_LEER = 'superadmin/usuarios/ver';
    public const USUARIOS_EDITAR = 'superadmin/usuarios/editar';
    
    public const ROLES_LEER = 'superadmin/roles/ver';
    public const ROLES_EDITAR = 'superadmin/roles/editar';
    
    public const TABLAS_LEER = 'superadmin/tablas/ver';
    public const TABLAS_EDITAR = 'superadmin/tablas/editar';

    public static function getPermisos(): array
    {
        return [
            self::DASHBOARD_LEER ,
            self::USUARIOS_LEER ,
            self::USUARIOS_EDITAR ,
            self::ROLES_LEER ,
            self::ROLES_EDITAR,
            self::TABLAS_LEER ,
            self::TABLAS_EDITAR ,
        ];
    }
}
