<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;

class TablaDashboardEntity implements JsonSerializable
{
    public function __construct(
        public readonly UuidValue $id,
        public readonly string $nombre,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id->value(),
            'nombre' => $this->nombre,
        ];
    }
}
