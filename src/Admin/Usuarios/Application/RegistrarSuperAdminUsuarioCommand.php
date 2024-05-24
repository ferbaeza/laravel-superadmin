<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

class RegistrarSuperAdminUsuarioCommand
{
    public function __construct(
        public readonly string $nombre,
        public readonly string $email,
        public readonly string $password,
    ) {
    }

}
