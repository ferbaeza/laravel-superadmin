<?php

namespace Baezeta\Admin\Shared\Constants;

class MenuConstants
{
    public static function getMenu()
    {
        return [
            self::MENU,
            self::MENU_USUARIOS,
            self::MENU_MIGRACIONES,
            self::MENU_TABLAS,
            self::CONFIG,
            self::CONFIG_USUARIOS,
            self::PROFILE,
            self::PROFILE_CONFIG,
            self::PROFILE_LOGOUT,
        ];
    }

    //**Menu */
    public const MENU = ['nombre' => 'Menu','route' => null,'codigo' => '001', 'codigo_padre' => null];
    public const MENU_USUARIOS = ['nombre' => 'Usuarios', 'route' => 'usuarios','codigo' => '101', 'codigo_padre' => '001'];
    public const MENU_TABLAS = ['nombre' => 'Tablas','route' => 'tablas','codigo' => '102', 'codigo_padre' => '001'];
    public const MENU_MIGRACIONES = ['nombre' => 'Migraciones','route' => null,'codigo' => '103', 'codigo_padre' => '001'];

    //**Config */
    public const CONFIG = ['nombre' => 'Config','route' => null,'codigo' => '002', 'codigo_padre' => null];
    public const CONFIG_USUARIOS = ['nombre' => 'Usuarios', 'route' => 'admin-usuarios', 'codigo' => '201', 'codigo_padre' => '002'];

    //**Profile */
    public const PROFILE = ['nombre' => 'Profile', 'route' => null, 'codigo' => '003', 'codigo_padre' => null];
    public const PROFILE_CONFIG = ['nombre' => 'Profile', 'route' => 'perfil', 'codigo' => '301', 'codigo_padre' => '003'];
    public const PROFILE_LOGOUT = ['nombre' => 'Logout', 'route' => 'logout', 'codigo' => '302', 'codigo_padre' => '003'];
}
