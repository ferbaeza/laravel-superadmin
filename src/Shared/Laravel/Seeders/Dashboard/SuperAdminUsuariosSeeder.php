<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Dashboard;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Constants\MenuConstants;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class SuperAdminUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUsuariosAdmin = ['nombre' => 'Fer Baeza', 'email' => 'fbaezahurtado@gmail.com', 'password' => cryptPass('1008')];
        SuperAdminUsuariosModel::factory($dataUsuariosAdmin)->create();

    }
}
