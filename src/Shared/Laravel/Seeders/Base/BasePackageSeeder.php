<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Base;

use Illuminate\Database\Seeder;
use Baezeta\Admin\Shared\DB\Application\SincronizarTablasDBCommand;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\MenuSideBarSeeder;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\RolesPermisosSeeder;
use Baezeta\Admin\Shared\DB\Application\SincronizarTablasDBCommandHandler;
use Baezeta\Admin\Shared\Laravel\Seeders\Dashboard\SuperAdminUsuariosSeeder;

class BasePackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RolesPermisosSeeder::class,
            SuperAdminUsuariosSeeder::class,
            MenuSideBarSeeder::class,
        ]);
        $command = new SincronizarTablasDBCommand();
        $usuarioNuevo =  app()->make(SincronizarTablasDBCommandHandler::class)->run($command);

    }
}
