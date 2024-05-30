<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Base;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Laravel\Seeders\SuperAdminSeeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\DashboardSeeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\RolesPermisosSeeder;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class BasePackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUsuariosAdmin = ['nombre' => 'Fer Baeza', 'email' => 'fbaezahurtado@gmail.com', 'password' => cryptPass('1008')];
        SuperAdminUsuariosModel::factory($dataUsuariosAdmin)->create();

        $this->call([
            RolesPermisosSeeder::class,
            DashboardSeeder::class,
        ]);

    }
}
