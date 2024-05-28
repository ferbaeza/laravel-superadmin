<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Entity;

use Baezeta\Admin\Shared\ValueObjects\FechaValue;
use JsonSerializable;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;

class SuperAdminUser implements JsonSerializable
{
    public function __construct(
        protected readonly UuidValue $id,
        protected readonly string $nombre,
        protected readonly string $email,
        protected readonly string $password,
    ) {
    }

    public static function fromCommand($command): self
    {
        return new self(
            id : UuidValue::create(),
            nombre : $command->nombre,
            email : $command->email,
            password : cryptPass($command->password),
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id->value(),
            'nombre' => $this->nombre,
            'email' => $this->email,
        ];
    }

    public function getUserId(): string
    {
        return $this->id->value();
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
