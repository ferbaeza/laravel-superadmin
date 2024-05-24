<?php

namespace Baezeta\Admin\Dashboard\Main\Application;

use Baezeta\Admin\Dashboard\Menu\Application\ListarMenuQuery;
use Baezeta\Admin\Dashboard\Main\Domain\Entity\InfoDashboardEntity;
use Baezeta\Admin\Dashboard\Menu\Application\ListarMenuQueryHandler;
use Baezeta\Admin\Dashboard\Tablas\Application\ListarTodosLasTablasQuery;
use Baezeta\Admin\Dashboard\Usuarios\Application\ListarTodosLosUsuariosQuery;
use Baezeta\Admin\Dashboard\Tablas\Application\ListarTodosLasTablasQueryHandler;
use Baezeta\Admin\Dashboard\Usuarios\Application\ListarTodosLosUsuariosQueryHandler;

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
