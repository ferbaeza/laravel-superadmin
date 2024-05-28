<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\PermisosDashboard;

use Illuminate\Foundation\Testing\WithFaker;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermisosDashboardFactory extends Factory
{
    use WithFaker;

    protected $model = PermisosDashboardModel::class;

    public function definition()
    {
        return [
            'id' => UuidValue::create()->value(),
            'nombre' => $this->faker->name,
        ];
    }
}
