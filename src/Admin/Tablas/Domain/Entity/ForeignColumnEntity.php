<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\Entity\EntityBase;

class ForeignColumnEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly string $tablaReferencesTo,
        public readonly string $columnaReferencesTo,
    )
        {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'tablaReferencesTo' => $this->tablaReferencesTo,
            'columnaReferencesTo' => $this->columnaReferencesTo,
        ];
    }
}
