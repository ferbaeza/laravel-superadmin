<?php

namespace Baezeta\Admin\Dashboard\Tablas\Domain\Entity;

use JsonSerializable;

class TablaDashboardEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $table,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'table' => $this->table,
        ];
    }
}
