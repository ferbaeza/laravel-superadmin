<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Domain\Service;

use Baezeta\Admin\Admin\Dashboard\Menu\Application\CrearMenuDashboard;
use Baezeta\Admin\Shared\Exceptions\Dashboard\CategoriaPrincipalMenuNoExisteException;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Interfaces\AdminMenuDashboardRepositoryInterface;

class CrearMenuDashboardService
{
    public function __construct(
        protected readonly AdminMenuDashboardRepositoryInterface $repository
    )
        {
    }

    public function run(CrearMenuDashboard $command)
    {
        $existeCategoriaPrincipal = $this->repository->exist($command->codigoPadre);
        if(!$existeCategoriaPrincipal){
            throw CategoriaPrincipalMenuNoExisteException::create();
        }

        return $this->repository->getEntityByCodigoPadre($command->codigoPadre);
    }
}
