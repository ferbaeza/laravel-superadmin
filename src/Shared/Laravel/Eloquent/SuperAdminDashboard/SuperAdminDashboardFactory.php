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
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'remember_token' => $this->faker->word,
            'last_activity' => $this->faker->date('Y-m-d'),
        ];
    }
}
