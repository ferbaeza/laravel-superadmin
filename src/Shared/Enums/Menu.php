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
            self::DASHBOARD => ['nombre' => 'Dashboard','route' => '/', 'codigo' => '000', 'codigo_padre' => null],
            self::MENU => ['nombre' => 'Menu','route' => null,'codigo' => '001', 'codigo_padre' => null],
            self::USUARIOS => ['nombre' => 'Usuarios', 'route' => 'usuarios','codigo' => '101', 'codigo_padre' => '001'],
            self::TABLAS => ['nombre' => 'Tablas','route' => 'tablas','codigo' => '102', 'codigo_padre' => '001'],
            self::CONFIGURACION => ['nombre' => 'Config','route' => null,'codigo' => '002', 'codigo_padre' => null],
            self::CONFIG_USUARIOS => ['nombre' => 'Usuarios', 'route' => 'admin-usuarios', 'codigo' => '201', 'codigo_padre' => '002'],
            self::PERFIL => ['nombre' => 'Profile', 'route' => null, 'codigo' => '003', 'codigo_padre' => null],
            self::PROFILE_USUARIO => ['nombre' => 'Profile', 'route' => 'perfil', 'codigo' => '301', 'codigo_padre' => '003'],
            self::LOGOUT => ['nombre' => 'Logout', 'route' => 'logout', 'codigo' => '302', 'codigo_padre' => '003'],
            default => ['nombre' => 'Dashboard','route' => '/', 'codigo' => '000', 'codigo_padre' => null],
        };
    }
}
