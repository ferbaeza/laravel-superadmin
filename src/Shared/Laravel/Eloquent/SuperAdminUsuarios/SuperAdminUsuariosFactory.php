<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;

class SuperAdminUsuariosFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminUsuariosModel::class;

    public function definition()
    {
        $avatarHombre = 'avatar-man.jpg';
        $avatarMujer = 'avatar-woman.jpg';
        return [
            'id' => UuidValue::new(),
            'nombre' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => cryptPass(rand(1001, 1999)),
            'avatar' => $this->faker->randomElement([$avatarHombre, $avatarMujer]),
            'fk_role_id' => SuperAdminRolesFactory::new(),
            'estado' => 0,
        ];
    }
}
