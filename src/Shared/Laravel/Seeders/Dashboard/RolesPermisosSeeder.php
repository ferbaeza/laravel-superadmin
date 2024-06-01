<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Dashboard;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Enums\Roles;
use Baezeta\Admin\Shared\Enums\Permisos;
use Baezeta\Admin\Shared\Utils\StringUtils;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminPermisos\SuperAdminPermisosModel;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach (Roles::cases() as $rol) {
            SuperAdminRolesModel::factory(['nombre' => StringUtils::capitalizar($rol->getRoleName()), 'codigo' => $rol])->create();
        }

        foreach (Permisos::cases() as $permiso) {
            SuperAdminPermisosModel::factory(['nombre' => StringUtils::minusculas($permiso->value)])->create();
        }

        /**Attach Permisos a Role Admin */
        $roleAdmin = SuperAdminRolesModel::where('codigo', Roles::ADMIN->value)->first();
        $roleAdmin->permisos()->attach(SuperAdminPermisosModel::all()->pluck('id'));
        
        /**Attach Permisos a Role Usuario */
        $roleUser = SuperAdminRolesModel::where('codigo', Roles::USUARIO->value)->first();
        $roleUser->permisos()->attach(SuperAdminPermisosModel::whereIn('nombre', Permisos::permisosBasicos())->get()->pluck('id'));
    }
}
