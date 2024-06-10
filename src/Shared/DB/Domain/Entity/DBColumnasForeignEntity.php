<?php

namespace Baezeta\Admin\Shared\DB\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\Entity\EntityBase;

class DBColumnasForeignEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly string $fromTabla,
        public readonly string $columnaForeignKey,
        public readonly string $tablaReferencesTo,
        public readonly string $columnaReferencesTo,
    )
        {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'fromTabla' => $this->fromTabla,
            'columnaForeignKey' => $this->columnaForeignKey,
            'tablaReferencesTo' => $this->tablaReferencesTo,
            'columnaReferencesTo' => $this->columnaReferencesTo,
        ];
    }
}
