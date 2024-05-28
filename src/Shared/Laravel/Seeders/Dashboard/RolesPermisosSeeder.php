<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Dashboard;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Utils\StringUtils;
use Baezeta\Admin\Shared\Laravel\Seeders\Constants\RolesConstants;
use Baezeta\Admin\Shared\Laravel\Seeders\Constants\PermisosConstants;
use Baezeta\Admin\Shared\Laravel\Eloquent\RolesDashboard\RolesDashboardModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\PermisosDashboard\PermisosDashboardModel;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = RolesConstants::getRoles();
        foreach ($roles as $value) {
            RolesDashboardModel::factory(['nombre' => StringUtils::capitalizar($value) , 'codigo' => $value])->create();
        }

        $permisos = PermisosConstants::getPermisos();
        foreach ($permisos as  $value) {
            PermisosDashboardModel::factory(['nombre' => StringUtils::minusculas($value)])->create();
        }
    }
}
