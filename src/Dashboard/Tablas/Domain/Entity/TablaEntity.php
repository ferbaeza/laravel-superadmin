<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Dashboard\Tablas\Domain\Collection\ColumnasCollection;

class TablaEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $table,
        public readonly ColumnasCollection $columnas,
    ) {

    }

    public function jsonSerialize(): mixed
    {
        return [
            'table' => $this->table,
            'totalColumnas' => $this->columnas->count(),
            'columnas' => $this->columnas
        ];
    }
}
