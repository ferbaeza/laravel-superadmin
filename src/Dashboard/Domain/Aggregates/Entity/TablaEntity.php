<?php

namespace Baezeta\Admin\Dashboard\Domain\Aggregates\Entity;

use JsonSerializable;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\ColumnasCollection;

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
