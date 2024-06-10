<?php

namespace Baezeta\Admin\Dashboard\Menu\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\Entity\EntityBase;
use Baezeta\Admin\Dashboard\Menu\Domain\Collection\MenuDashboardCollection;

class MenuDashboardEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly string $id,
        public readonly string $nombre,
        public readonly ?string $icon,
        public readonly ?string $url,
        public readonly string $codigo,
        public readonly ?string $codigoPadre,
        public readonly MenuDashboardCollection $subMenus,
    ) {
        parent::__construct();
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'icon' => $this->icon,
            'url' => $this->url,
            'codigo' => $this->codigo,
            'codigoPadre' => $this->codigoPadre,
            'subMenus' => $this->subMenus
        ];
    }
}
