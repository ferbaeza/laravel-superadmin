<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Datasource;

use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\MenuDashboardEntity;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;
use Baezeta\Admin\Dashboard\Domain\Interfaces\MenuDashboardRepositoryInterface;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\MenuDashboardCollection;

class MenuDashboardRepository implements MenuDashboardRepositoryInterface
{

    public function exist(string $id)
    {
        return SuperAdminMenuModel::find($id) ? true : false;
    }

    public function getEntity(string $id): MenuDashboardEntity
    {
        $entidad = SuperAdminMenuModel::find($id);
        return $entidad;
    }

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
