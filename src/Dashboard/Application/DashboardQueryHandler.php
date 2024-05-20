<?php

namespace Baezeta\Admin\Dashboard\Application;

use Baezeta\Admin\Dashboard\Domain\Entity\InfoDashboardEntity;
use Baezeta\Admin\Dashboard\Domain\Interfaces\TablasDashboardRepositoryInterface;
use Baezeta\Admin\Dashboard\Domain\Interfaces\UsuariosDashboardRepositoryInterface;

class DashboardQueryHandler
{
    public function __construct(
        protected TablasDashboardRepositoryInterface $tablasRepository,
        protected UsuariosDashboardRepositoryInterface $usuariosRepository
    )
        {
    }

    public function run(DashboardQuery $query)
    {
        $tablas = $this->tablasRepository->getCollection();
        $usuarios = $this->usuariosRepository->getCollection();

        $info = InfoDashboardEntity::fromCommand($tablas->count(), $tablas, $usuarios->count(), $usuarios);
        return $info;
    }

}
