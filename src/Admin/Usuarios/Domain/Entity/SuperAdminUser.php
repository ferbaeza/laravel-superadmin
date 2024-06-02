<?php

namespace Baezeta\Admin\Admin\Usuarios\Domain\Entity;

use JsonSerializable;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Admin\Role\Domain\Entity\RoleAdminEntity;
use Baezeta\Admin\Admin\Usuarios\Application\RegistrarSuperAdminUsuarioCommand;

class SuperAdminUser implements JsonSerializable
{
    public function __construct(
        public readonly UuidValue $id,
        protected readonly string $nombre,
        protected readonly string $email,
        protected readonly string $password,
        protected readonly string $fkRoleId,
    ) {
    }

    public static function fromCommand(RegistrarSuperAdminUsuarioCommand $command, RoleAdminEntity $role): self
    {
        return new self(
            id : UuidValue::create(),
            nombre : $command->nombre,
            email : $command->email,
            password : cryptPass($command->password),
            fkRoleId : $role->getId(),
        );
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id->value(),
            'nombre' => $this->nombre,
            'email' => $this->email,
            'fkRoleId' => $this->fkRoleId,
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

    public function getRoleId(): string
    {
        return $this->fkRoleId;
    }
}
