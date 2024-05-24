<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Entity;

use Illuminate\Support\Str;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Support\Facades\Hash;
use JsonSerializable;

class SuperAdminUser implements JsonSerializable
{
    private function __construct(
        protected readonly UuidValue $id,
        protected readonly string $nombre,
        protected readonly string $email,
        protected readonly string $password,
        protected readonly string $lastActivity,
    ) {
    }

    public static function fromCommand($command): self
    {
        return new self(
            id : UuidValue::create(),
            nombre : $command->nombre,
            email : $command->email,
            password : Hash::make($command->password),
            lastActivity : today()
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id->value(),
            'nombre' => $this->nombre,
            'email' => $this->email,
            'lastActivity' => $this->lastActivity
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

    public function getLastActivity(): string
    {
        return $this->lastActivity;
    }
}
