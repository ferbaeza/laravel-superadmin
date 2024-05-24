<?php

namespace Baezeta\Admin\Dashboard\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\TablasCollection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\MenuDashboardCollection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\UsuariosAdminCollection;

class InfoDashboardEntity implements JsonSerializable
{
    public function __construct(
        public readonly int $cantidadTablas,
        public TablasCollection $tablas,
        public readonly int $cantidadUsuarios,
        public UsuariosAdminCollection $usuarios,
        public readonly int $cantidadMenu,
        public MenuDashboardCollection $menu,
    ) {
    }

    public static function fromCommand(
        TablasCollection $tablas,
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
