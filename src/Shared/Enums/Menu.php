<?php

namespace Baezeta\Admin\Shared\Enums;

enum Menu : string
{
    case APP = 'AppAdmin';

    case MENU = 'menu';
    case DASHBOARD = 'dashboard';
    case TABLAS = 'tablas';
    case USUARIOS = 'usuarios';
    
    case CONFIGURACION = 'configuración';
    case CONFIG_USUARIOS = 'configuración-usuarios';
    case PROFILE_USUARIO = 'perfil-usuario';
    case LOGOUT = 'logout';

    public function getMenuData(): array
    {
        return match ($this) {
            self::APP => ['nombre' => (config('package.nombre') ?? 'AppAdmin'),'icon' => 'element.svg' , 'route' => '/','codigo' => '000', 'codigo_padre' => null],


            self::MENU => ['nombre' => 'Menu', 'icon' => 'window-sidebar.svg', 'route' => '/main', 'codigo' => '001', 'codigo_padre' => null],
            self::DASHBOARD => ['nombre' => 'Dashboard','icon' => 'columns.svg' , 'route' => '/main', 'codigo' => '101', 'codigo_padre' => '001'],
            self::TABLAS => ['nombre' => 'Tablas','icon' => 'database-fill-add.svg' , 'route' => '/tablas','codigo' => '102', 'codigo_padre' => '001'],
            self::USUARIOS => ['nombre' => 'Usuarios', 'icon' => 'people-fill.svg' , 'route' => '/usuarios','codigo' => '103', 'codigo_padre' => '001'],

            self::CONFIGURACION => ['nombre' => 'Config','icon' => 'favicon.svg' , 'route' => '/main','codigo' => '002', 'codigo_padre' => null],
            self::CONFIG_USUARIOS => ['nombre' => 'Usuarios Dashboard', 'icon' => 'person-lines-fill.svg' , 'route' => '/admin-usuarios', 'codigo' => '201', 'codigo_padre' => '002'],
            self::PROFILE_USUARIO => ['nombre' => 'Mi Perfil', 'icon' => 'person-vcard.svg' , 'route' => '/perfil', 'codigo' => '202', 'codigo_padre' => '002'],
            self::LOGOUT => ['nombre' => 'Logout', 'icon' => 'box-arrow-left.svg' , 'route' => '/logout', 'codigo' => '203', 'codigo_padre' => '002'],
            default => ['nombre' => 'Dashboard','icon' => 'app.svg' , 'route' => '/', 'codigo' => '000', 'codigo_padre' => null],
        };
    }
}
