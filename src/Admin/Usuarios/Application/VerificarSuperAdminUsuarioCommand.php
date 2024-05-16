<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

class VerificarSuperAdminUsuarioCommand
{
    public function __construct(
        public readonly string $email,
    )
        {
    }

}
