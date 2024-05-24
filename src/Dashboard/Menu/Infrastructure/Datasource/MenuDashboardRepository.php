<?php

namespace Baezeta\Admin\Dashboard\Menu\Infrastructure\Datasource;

use Baezeta\Admin\Dashboard\Menu\Domain\Entity\MenuDashboardEntity;
use Baezeta\Admin\Dashboard\Menu\Domain\Collection\MenuDashboardCollection;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;
use Baezeta\Admin\Dashboard\Menu\Domain\Interfaces\MenuDashboardRepositoryInterface;

class MenuDashboardRepository implements MenuDashboardRepositoryInterface
{

    public function getCollection(): MenuDashboardCollection
    {
        $datos = SuperAdminMenuModel::all();
        $coleccion = $this->ordenarMenu($datos->toArray());
        return $coleccion;
    }

    private function ordenarMenu(array $datos)
    {
        $arrayMenu = new MenuDashboardCollection();
        foreach ($datos as $value) {
            // dd($value);
            if ($value['codigo_padre'] == null) {

                $arrayMenu->add(
                    new MenuDashboardEntity(
                        $value['id'],
                        $value['nombre'],
                        $value['url'],
                        $value['codigo'],
                        $value['codigo_padre'],
                        $this->buscarHijos($datos, $value['codigo'])
                    )
                );
            }
        }
        return $arrayMenu;
    }

    private function buscarHijos(array $datos, string $codigoPadre)
    {
        $subMenus = new MenuDashboardCollection();
        foreach ($datos as $value) {
            if ($value['codigo_padre'] == $codigoPadre) {
                $subMenus->add(
                    new MenuDashboardEntity(
                        $value['id'],
                        $value['nombre'],
                        $value['url'],
                        $value['codigo'],
                        $value['codigo_padre'],
                        $this->buscarHijos($datos, $value['codigo'])
                    )
                );
            }
        }
        return $subMenus;
    }
}
