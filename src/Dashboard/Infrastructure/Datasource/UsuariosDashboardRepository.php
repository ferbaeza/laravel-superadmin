<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Datasource;

use Baezeta\Admin\Dashboard\Domain\Aggregates\Entity\UsuarioAdminEntity;
use Baezeta\Admin\Dashboard\Domain\Aggregates\Collection\UsuariosAdminCollection;
use Baezeta\Admin\Dashboard\Domain\Interfaces\UsuariosDashboardRepositoryInterface;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class UsuariosDashboardRepository implements UsuariosDashboardRepositoryInterface
{
    public function getCollection(): UsuariosAdminCollection
    {
        $usuarios = SuperAdminUsuariosModel::all();
        $coleccion = new UsuariosAdminCollection();

        $usuarios->each(function($usuario) use(&$coleccion){
            $coleccion->push(new UsuarioAdminEntity($usuario->id, $usuario->nombre, $usuario->email));
        });

        return $coleccion;
    }

}
