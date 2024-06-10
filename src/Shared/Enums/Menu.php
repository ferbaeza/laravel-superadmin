<?php

namespace Baezeta\Admin\Shared\Enums;

enum Menu : string
{
    case DASHBOARD = 'dashboard';
    case MENU = 'menu';
    case USUARIOS = 'usuarios';
    case TABLAS = 'tablas';
    case CONFIGURACION = 'configuración';
    case CONFIG_USUARIOS = 'configuración-usuarios';
    case PERFIL = 'perfil';
    case PROFILE_USUARIO = 'perfil-usuario';
    case LOGOUT = 'logout';

    public function getMenuData(): array
    {
        return match ($this) {
            self::DASHBOARD => ['nombre' => 'Dashboard','icon' => 'body-text' , 'route' => '/main', 'codigo' => '000', 'codigo_padre' => null],
            self::MENU => ['nombre' => 'Menu','icon' => 'bar-chart-fill' , 'route' => '/main','codigo' => '001', 'codigo_padre' => null],
            self::USUARIOS => ['nombre' => 'Usuarios', 'icon' => '' , 'route' => '/usuarios','codigo' => '101', 'codigo_padre' => '001'],
            self::TABLAS => ['nombre' => 'Tablas','icon' => 'columns' , 'route' => '/tablas','codigo' => '102', 'codigo_padre' => '001'],
            self::CONFIGURACION => ['nombre' => 'Config','icon' => 'shadows' , 'route' => '/main','codigo' => '002', 'codigo_padre' => null],
            self::CONFIG_USUARIOS => ['nombre' => 'Usuarios', 'icon' => 'people-fill' , 'route' => '/admin-usuarios', 'codigo' => '201', 'codigo_padre' => '002'],
            self::PERFIL => ['nombre' => 'Profile', 'icon' => 'body-text' , 'route' => '/main', 'codigo' => '003', 'codigo_padre' => null],
            self::PROFILE_USUARIO => ['nombre' => 'Profile', 'icon' => 'person-circle' , 'route' => '/perfil', 'codigo' => '301', 'codigo_padre' => '003'],
            self::LOGOUT => ['nombre' => 'Logout', 'icon' => '' , 'route' => '/logout', 'codigo' => '302', 'codigo_padre' => '003'],
            default => ['nombre' => 'Dashboard','icon' => '' , 'route' => '/', 'codigo' => '000', 'codigo_padre' => null],
        };
    }
}
