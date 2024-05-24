<?php

namespace Baezeta\Admin\Dashboard\Usuarios\Infrastructure\Datasource;

use Baezeta\Admin\Dashboard\Usuarios\Domain\Entity\UsuarioAdminEntity;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Collection\UsuariosAdminCollection;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;
use Baezeta\Admin\Dashboard\Usuarios\Domain\Interfaces\UsuariosDashboardRepositoryInterface;

class UsuariosDashboardRepository implements UsuariosDashboardRepositoryInterface
{
    public function getCollection(): UsuariosAdminCollection
    {
        $usuarios = SuperAdminUsuariosModel::all();
        $coleccion = new UsuariosAdminCollection();

        $usuarios->each(function ($usuario) use (&$coleccion) {
            $coleccion->push(new UsuarioAdminEntity($usuario->id, $usuario->nombre, $usuario->email));
        });

        return $coleccion;
    }

}
