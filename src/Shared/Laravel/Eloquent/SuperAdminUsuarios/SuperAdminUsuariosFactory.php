<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios;

use Illuminate\Foundation\Testing\WithFaker;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;

class SuperAdminUsuariosFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminUsuariosModel::class;

    public const MAN = 'male';
    public const WOMAN = 'female';

    public const AVATAR_MAN = 'avatar-man.jpg';
    public const AVATAR_WOMAN = 'avatar-woman.jpg';

    public function definition()
    {
        $genero = $this->faker->randomElement([self::MAN, self::WOMAN]);
        return [
            'id' => UuidValue::new(),
            'nombre' => $this->faker->name(gender: $genero),
            'email' => $this->faker->unique()->safeEmail,
            'password' => cryptPass(rand(1001, 1999)),
            'avatar' => $genero == 'female' ? self::AVATAR_WOMAN : self::AVATAR_MAN,
            'fk_role_id' => SuperAdminRolesFactory::new(),
            'estado' => 0,
        ];
    }
    
}
