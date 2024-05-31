<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Base;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\MenuSideBarSeeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\RolesPermisosSeeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\SuperAdminUsuariosSeeder;

class BasePackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SuperAdminUsuariosSeeder::class,
            RolesPermisosSeeder::class,
            MenuSideBarSeeder::class,
        ]);

    }
}
