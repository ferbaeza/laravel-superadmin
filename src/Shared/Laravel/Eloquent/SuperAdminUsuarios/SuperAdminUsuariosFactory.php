<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class SuperAdminUsuariosFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminUsuariosModel::class;

    public function definition()
    {
        $nombre = $this->faker->name;
        return [
            'nombre' => $nombre,
            'email' => $nombre . '_'.rand(23,46) .'@mail.com',
            'password' => cryptPass(rand(1001, 1999)),
            'fk_role_id' => SuperAdminRolesFactory::new(),
            'estado' => 0,
        ];
    }
}
