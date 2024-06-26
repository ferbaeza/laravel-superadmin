<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles;

use Baezeta\Admin\Shared\Enums\Roles;
use Baezeta\Admin\Shared\Utils\StringUtils;
use Illuminate\Foundation\Testing\WithFaker;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesModel;

class SuperAdminRolesFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminRolesModel::class;

    public function definition()
    {
        return [
            'id' => UuidValue::create()->value(),
            'nombre' => StringUtils::capitalizar($this->faker->name),
            'codigo' => Roles::USUARIO->value,
        ];
    }
}
