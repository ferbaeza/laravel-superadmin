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
    public const MENU = ['nombre' => 'Menu','url' => null,'codigo' => '001', 'codigo_padre' => null];
    //**subsMenu */
    public const MENU_USUARIOS = ['nombre' => 'Usuarios', 'url' => null,'codigo' => '101', 'codigo_padre' => '001'];
    public const MENU_MIGRACIONES = ['nombre' => 'Migraciones','url' => null,'codigo' => '102', 'codigo_padre' => '001'];
    public const MENU_TABLAS = ['nombre' => 'Tablas','url' => null,'codigo' => '103', 'codigo_padre' => '001'];

    //**Config */
    public const CONFIG = ['nombre' => 'Config','url' => null,'codigo' => '002', 'codigo_padre' => null];
    //**subsConfig */
    public const CONFIG_USUARIOS = ['nombre' => 'Usuarios', 'url' => null, 'codigo' => '201', 'codigo_padre' => '002'];
    //**Profile */
    public const PROFILE = ['nombre' => 'Profile', 'url' => null, 'codigo' => '003', 'codigo_padre' => null];
    //**subsProfile */
    public const PROFILE_CONFIG = ['nombre' => 'Profile', 'url' => null, 'codigo' => '301', 'codigo_padre' => '003'];
    public const PROFILE_LOGOUT = ['nombre' => 'Menu', 'url' => null, 'codigo' => '203', 'codigo_padre' => '002'];
}
