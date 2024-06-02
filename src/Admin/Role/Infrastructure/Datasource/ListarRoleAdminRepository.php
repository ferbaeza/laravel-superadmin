<?php

namespace Baezeta\Admin\Admin\Role\Infrastructure\Datasource;

use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Admin\Role\Domain\Entity\RoleAdminEntity;
use Baezeta\Admin\Admin\Role\Domain\Collection\RoleAdminCollection;
use Baezeta\Admin\Shared\Exceptions\Dashboard\RoleAdminNoExisteException;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesModel;
use Baezeta\Admin\Admin\Role\Domain\Interfaces\ListarRoleAdminRepositoryInterface;



class ListarRoleAdminRepository implements ListarRoleAdminRepositoryInterface
{

    public function getEntity(int $codigo) : RoleAdminEntity
    {
        $model = new SuperAdminRolesModel();
        $data = $model->where('codigo', $codigo)->first();

        if(!$data) {
            throw RoleAdminNoExisteException::create();
        }

        return new RoleAdminEntity(
            id: new UuidValue($data->id),
            nombre: $data->nombre,
            codigo: $data->codigo,
        );
    }

    public function getCollection() : RoleAdminCollection
    {
        $roles = SuperAdminRolesModel::all();
        $collection = new RoleAdminCollection();

        $roles->each(function ($role) use (&$collection) {
            $collection->push(new RoleAdminEntity(
                id: new UuidValue($role->id),
                nombre: $role->nombre,
                codigo: $role->codigo,
            ));
        });

        return $collection;
    }
}
