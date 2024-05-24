<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Domain\Entity;

use JsonSerializable;

class UsuarioAdminEntity implements JsonSerializable
{
    public function __construct(
        public readonly string $id,
        public readonly ?string $name,
        public readonly string $email,
    ) {
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
