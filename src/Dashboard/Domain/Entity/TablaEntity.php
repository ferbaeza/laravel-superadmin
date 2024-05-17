<?php

namespace Baezeta\Admin\Dashboard\Domain\Entity;

use Baezeta\Admin\Dashboard\Domain\Collection\ColumnasCollection;
use JsonSerializable;

class TablaEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $table,
        public readonly ColumnasCollection $columnas,
    )
        {
    
    }

    public function jsonSerialize(): mixed
    {
        return [
            'table' => $this->table,
            'columnas' => $this->columnas
        ];
    }
}
