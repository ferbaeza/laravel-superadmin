<?php

namespace Baezeta\Admin\Dashboard\Application;

use Baezeta\Admin\Dashboard\Domain\Entity\InfoDashboardEntity;
use Baezeta\Admin\Dashboard\Application\ListarTodosLasTablasQuery;
use Baezeta\Admin\Dashboard\Application\ListarTodosLosUsuariosQuery;

class DashboardQueryHandler
{
    public function __construct(
        protected readonly ListarTodosLasTablasQueryHandler $tablasHandler,
        protected readonly ListarTodosLosUsuariosQueryHandler $usariosHandler,
        protected readonly ListarMenuQueryHandler $menuHandler
    ) {
    }

    public function run(DashboardQuery $query) : InfoDashboardEntity
    {
        $tablas = $this->tablasHandler->run(new ListarTodosLasTablasQuery);
        $usuarios = $this->usariosHandler->run(new ListarTodosLosUsuariosQuery);
        $menu = $this->menuHandler->run(new ListarMenuQuery);

        $info = InfoDashboardEntity::fromCommand(
            $tablas, 
            $usuarios,
            $menu
        );
        // dd($menu->jsonSerialize(), $usuarios->jsonSerialize());
        return $info;
    }

}
