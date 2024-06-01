<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRolesPermisos;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminPermisos\SuperAdminPermisosFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRolesPermisos\SuperAdminRolesPermisosModel;

class SuperAdminRolesPermisosFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminRolesPermisosModel::class;

    public function definition()
    {
        return [
            'fk_role_id' => SuperAdminRolesFactory::new(),
            'fk_permiso_id' => SuperAdminPermisosFactory::new(),
        ];
    }
}
