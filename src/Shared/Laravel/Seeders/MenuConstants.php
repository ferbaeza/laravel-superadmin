<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders;

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
            self::CONFIG_USUARIO
        ];
    }

    //**Menu */
    public const MENU = ['nombre' => 'Menu','url' => null,'codigo' => '001', 'codigo_padre' => null];
    public const MENU_USUARIOS = ['nombre' => 'Usuarios', 'url' => null,'codigo' => '101', 'codigo_padre' => '001'];
    public const MENU_MIGRACIONES = ['nombre' => 'Migraciones','url' => null,'codigo' => '102', 'codigo_padre' => '001'];
    public const MENU_TABLAS = ['nombre' => 'Tablas','url' => null,'codigo' => '103', 'codigo_padre' => '001'];

    //**Config */
    public const CONFIG = ['nombre' => 'Config','url' => null,'codigo' => '002', 'codigo_padre' => null];
    public const CONFIG_USUARIO = ['nombre' => 'Menu', 'url' => null, 'codigo' => '201', 'codigo_padre' => '002'];
}
