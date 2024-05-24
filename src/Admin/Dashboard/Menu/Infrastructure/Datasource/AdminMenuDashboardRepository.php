<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Datasource;

use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\AdminMenuEntity;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\CodigoMenuEntity;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Collection\AdminMenuDashboardCollection;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Interfaces\AdminMenuDashboardRepositoryInterface;

class AdminMenuDashboardRepository implements AdminMenuDashboardRepositoryInterface
{

    public function exist(string $codigoPadre): bool
    {
        return SuperAdminMenuModel::where('codigo_padre', $codigoPadre)->first() ? true : false;
    }

    public function getEntityByCodigoPadre(string $codigoPadre): CodigoMenuEntity
    {
        $ultimoRegistro = SuperAdminMenuModel::where('codigo_padre', $codigoPadre)
            ->orderBy('codigo', 'desc')
            ->first();
        $codigo = intval($ultimoRegistro->codigo) + 1;
        return new CodigoMenuEntity($codigo);
    }

    public function save(AdminMenuEntity $menu): void
    {
        SuperAdminMenuModel::create([
            'id' => $menu->id->value(),
            'nombre' => $menu->nombre,
            'codigo' => $menu->codigo,
            'codigo_padre' => $menu->codigoPadre,
        ]);
    }
}
