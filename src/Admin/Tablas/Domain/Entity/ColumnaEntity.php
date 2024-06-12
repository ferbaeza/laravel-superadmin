<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\ForeignColumnCollection;

class ColumnaEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $name,
        public readonly string $typeName,
        public readonly string $type,
        public readonly bool $nullable,
        public ?ForeignColumnEntity $foreign
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->name,
            'typeName' => $this->typeName,
            'type' => $this->type,
            'nullable' => $this->nullable,
            'foreign' => $this->foreign ?? null
        ];
    }
}
