<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUsuariosAdmin = ['nombre' => 'Fer Baeza','email' => 'baezeta@gmail.com', 'password' =>'1008'];
        SuperAdminUsuariosModel::factory($dataUsuariosAdmin)->create();

        foreach (MenuConstants::getMenu() as $value) {
            SuperAdminMenuModel::factory($value)->create();
        }
    }
}
