<?php

namespace Baezeta\Admin\Dashboard\Main\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\Entity\EntityBase;
use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\TablasDashboardCollection;
use Baezeta\Admin\Dashboard\Menu\Domain\Collection\MenuDashboardCollection;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Collection\UsuariosAdminCollection;

class InfoDashboardEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly int $cantidadTablas,
        public TablasDashboardCollection $tablas,
        public readonly int $cantidadUsuarios,
        public UsuariosAdminCollection $usuarios,
        public readonly int $cantidadMenu,
        public MenuDashboardCollection $menu,
    ) {
    }

    public static function fromCommand(
        TablasDashboardCollection $tablas,
        UsuariosAdminCollection $usuarios,
        MenuDashboardCollection $menu

    ): InfoDashboardEntity {
        return new self(
            cantidadTablas :$tablas->count(),
            tablas :$tablas,
            cantidadUsuarios :$usuarios->count(),
            usuarios : $usuarios,
            cantidadMenu : $menu->count(),
            menu : $menu
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'cantidadTablas' => $this->cantidadTablas,
            'tablas' => $this->tablas,
            'cantidadUsuarios' => $this->cantidadUsuarios,
            'usuarios' => $this->usuarios,
            'cantidadMenu' => $this->cantidadMenu,
            'menu' => $this->menu,
        ];
    }


}
