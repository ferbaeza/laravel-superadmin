<?php

namespace Baezeta\Admin\Shared\DB\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBColumnasForeignCollection;

class DBColumnaEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $name,
        public readonly string $typeName,
        public readonly string $type,
        public readonly bool $nullable,
        public readonly DBColumnasForeignCollection $foreign,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->name,
            'typeName' => $this->typeName,
            'type' => $this->type,
            'nullable' => $this->nullable,
            'foreign' => $this->foreign,
        ];
    }
}
