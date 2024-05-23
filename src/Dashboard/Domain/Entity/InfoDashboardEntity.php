<?php

namespace Baezeta\Admin\Dashboard\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\TablasCollection;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\UsuariosAdminCollection;

class InfoDashboardEntity implements JsonSerializable
{
    public function __construct(
        public readonly int $cantidadTablas,
        public TablasCollection $tablas,
        public readonly int $cantidadUsuarios,
        public UsuariosAdminCollection $usuarios,
    ) {
    }

    public static function fromCommand(
        int $numeroTablas,
        TablasCollection $tablas,
        int $cantidadUsuarios,
        UsuariosAdminCollection $usuarios
    ): InfoDashboardEntity {
        return new self(
            cantidadTablas :$numeroTablas,
            tablas :$tablas,
            cantidadUsuarios :$cantidadUsuarios,
            usuarios : $usuarios
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'cantidadTablas' => $this->cantidadTablas,
            'tablas' => $this->tablas,
            'cantidadUsuarios' => $this->cantidadUsuarios,
            'usuarios' => $this->usuarios
        ];
    }


}
