<?php

namespace Baezeta\Admin\Admin\Role\Domain\Entity;

use Baezeta\Admin\Shared\Entity\EntityBase;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use JsonSerializable;

class RoleAdminEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly UuidValue $id,
        public readonly string $nombre,
        public readonly int $codigo,
    )
        {
    }

    public function getId(): string
    {
        return $this->id->value();
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id->value(),
            'nombre' => $this->nombre,
            'codigo' => $this->codigo,
        ];
    }

}
