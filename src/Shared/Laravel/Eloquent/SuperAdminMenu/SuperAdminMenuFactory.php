<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuModel;

class SuperAdminMenuFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminMenuModel::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'url' => $this->faker->url,
            'codigo' => $this->faker->word,
            'codigo_padre' => $this->faker->word,
        ];
    }
}