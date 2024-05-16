<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Entity;

use Illuminate\Support\Str;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Support\Facades\Hash;

class SuperAdminUser
{
    private function __construct(
        protected readonly UuidValue $id,
        protected readonly string $email,
        protected readonly string $password,
        protected readonly string $lastActivity,

    )
        {
    }

    public static function fromCommand($command): self
    {
        return new self(
            id : UuidValue::create(),
            email : $command->email,
            password : Hash::make($command->password),
            lastActivity : today()
        );
    }

    public function getUserId(): string
    {
        return $this->id->value();
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
