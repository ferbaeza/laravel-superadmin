<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Application;

use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\AdminMenuEntity;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Service\CrearMenuDashboardService;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Interfaces\AdminMenuDashboardRepositoryInterface;

class CrearMenuDashboardHandler
{
    public function __construct(
        protected readonly CrearMenuDashboardService $service,
        protected readonly AdminMenuDashboardRepositoryInterface $repository
    )
        {
    }

    public function run(CrearMenuDashboard $command)
    {
        $codigoNuevaEntidad = $this->service->run($command);
        $entidad = AdminMenuEntity::fromCommand($command, $codigoNuevaEntidad);
        $this->repository->save($entidad);
        return $entidad;
    }

}
