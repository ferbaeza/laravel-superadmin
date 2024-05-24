<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Application;

use Baezeta\Admin\Dashboard\Usuarios\Application\ListarTodosLosUsuariosQuery;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Collection\UsuariosAdminCollection;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Interfaces\UsuariosDashboardRepositoryInterface;


class ListarTodosLosUsuariosQueryHandler
{
    public function __construct(
        protected UsuariosDashboardRepositoryInterface $usuariosRepository
    ) {
    }

    public function run(ListarTodosLosUsuariosQuery $query) : UsuariosAdminCollection
    {
        return $this->usuariosRepository->getCollection();
    }

}
