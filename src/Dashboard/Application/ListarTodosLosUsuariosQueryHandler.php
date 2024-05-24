<?php

namespace Baezeta\Admin\Dashboard\Application;

use Baezeta\Admin\Dashboard\Application\ListarTodosLosUsuariosQuery;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\UsuariosAdminCollection;
use Baezeta\Admin\Dashboard\Domain\Interfaces\UsuariosDashboardRepositoryInterface;

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
