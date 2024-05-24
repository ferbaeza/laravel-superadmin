<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Entity;

use Baezeta\Admin\Shared\Entity\EntityBase;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\MenuDashboardCollection;
use JsonSerializable;

class MenuDashboardEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly string $id,
        public readonly string $nombre,
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
            'url' => $this->url,
            'codigo' => $this->codigo,
            'codigoPadre' => $this->codigoPadre,
            'subMenus' => $this->subMenus
        ];
    }
}
