<?php

namespace Baezeta\Admin\Dashboard\Domain\Entity;

use JsonSerializable;

class ColumnaEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $name,
        public readonly string $typeName,
        public readonly string $type,
        public readonly ?string $nullable,
    )
    {
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
