<?php

namespace Baezeta\Admin\Shared\DB\Domain\Entity;

use JsonSerializable;

class DBColumnaEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $name,
        public readonly string $typeName,
        public readonly string $type,
        public readonly bool $nullable,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->name,
            'typeName' => $this->typeName,
            'type' => $this->type,
            'nullable' => $this->nullable
        ];
    }
}
