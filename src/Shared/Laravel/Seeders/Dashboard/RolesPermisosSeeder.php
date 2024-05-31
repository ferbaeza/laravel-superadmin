<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Dashboard;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Utils\StringUtils;
use Baezeta\Admin\Shared\Constants\RolesConstants;
use Baezeta\Admin\Shared\Constants\PermisosConstants;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminPermisos\SuperAdminPermisosModel;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = RolesConstants::getRoles();
        foreach ($roles as $value) {
            SuperAdminRolesModel::factory(['nombre' => StringUtils::capitalizar($value), 'codigo' => $value])->create();
        }

        $permisos = PermisosConstants::getPermisos();
        foreach ($permisos as  $value) {
            SuperAdminPermisosModel::factory(['nombre' => StringUtils::minusculas($value)])->create();
        }
    }
}
