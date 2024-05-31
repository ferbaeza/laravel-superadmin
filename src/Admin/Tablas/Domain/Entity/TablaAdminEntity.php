<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\ColumnasCollection;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;

class TablaAdminEntity implements JsonSerializable
{
    public function __construct(
        public readonly UuidValue $id,
        public readonly string $table,
        public readonly ColumnasCollection $columnas,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'table' => $this->table,
            'totalColumnas' => $this->columnas->count(),
            'columnas' => $this->columnas
        ];
    }
}
