<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\ColumnasCollection;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;

class TablaAdminEntity implements JsonSerializable
{
    public function __construct(
        public readonly UuidValue $id,
        public readonly string $nombre,
        public readonly int $size,
        public readonly ColumnasCollection $columnas,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id->value(),
            'nombre' => $this->nombre,
            'size' => $this->getSize(),
            'totalColumnas' => $this->columnas->count(),
            'columnas' => $this->columnas
        ];
    }

    private function getSize()
    {
        return strval($this->size) . '-MB';
    }
}
