<?php

namespace Baezeta\Admin\Shared\DB\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBColumnasCollection;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;

class DBTablaAdminEntity implements JsonSerializable
{
    public function __construct(
        public readonly UuidValue $id,
        public readonly string $table,
        public readonly DBColumnasCollection $columnas,
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
