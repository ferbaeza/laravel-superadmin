<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminPermisos;

use Illuminate\Foundation\Testing\WithFaker;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuperAdminPermisosFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminPermisosModel::class;

    public function definition()
    {
        return [
            'id' => UuidValue::create()->value(),
            'nombre' => $this->faker->name,
        ];
    }
}
