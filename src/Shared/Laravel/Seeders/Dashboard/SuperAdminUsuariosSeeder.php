<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Dashboard;

use Baezeta\Admin\Shared\Enums\Roles;
use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class SuperAdminUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultRole = $this->getDefaultRole();
        $admin = ['nombre' => 'Fer Baeza', 'email' => 'fbaezahurtado@gmail.com', 'password' => cryptPass('1008'), 'fk_role_id' => $this->getRoleAdmin()];
        SuperAdminUsuariosModel::factory($admin)->create();
        SuperAdminUsuariosModel::factory(['fk_role_id' => $defaultRole])->count(4)->create();
    }

    public function getRoleAdmin()
    {
        return SuperAdminRolesModel::where('codigo', Roles::ADMIN->value)->first()->id;
    }

    public function getDefaultRole()
    {
        return SuperAdminRolesModel::where('codigo', Roles::USUARIO->value)->first()->id;
    }
}
