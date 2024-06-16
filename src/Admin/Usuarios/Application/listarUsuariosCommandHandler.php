<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\UsuariosAplicacionRepositoryInterface;

class listarUsuariosCommandHandler
{
    public function __construct(
        protected readonly UsuariosAplicacionRepositoryInterface $usuariosAplicacionRepository
    )
        {
    }

    public function run(listarUsuariosCommand $command)
    {
        $this->usuariosAplicacionRepository->getCollection();
    }
}
