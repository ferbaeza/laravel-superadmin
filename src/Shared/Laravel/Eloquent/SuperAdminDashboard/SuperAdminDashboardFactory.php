<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDashboard;


use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDashboard\SuperAdminDashboardModel;

class SuperAdminDashboardFactory

extends Factory
{
    use WithFaker;

    protected $model = SuperAdminDashboardModel::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'ruta' => $this->faker->url,
            'icono' => $this->faker->word,
            'orden' => $this->faker->randomDigit,
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
