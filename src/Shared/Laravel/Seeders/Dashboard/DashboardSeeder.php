<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Dashboard;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Constants\MenuConstants;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (MenuConstants::getMenu() as $value) {
            SuperAdminMenuModel::factory($value)->create();
        }
    }
}
