<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\RolesDashboard;

use Baezeta\Admin\Shared\Utils\StringUtils;
use Illuminate\Foundation\Testing\WithFaker;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\RolesDashboard\RolesDashboardModel;

class RolesDashboardFactory extends Factory
{
    use WithFaker;

    protected $model = RolesDashboardModel::class;

    public function definition()
    {
        $faker = $this->faker->name;
        return [
            'id' => UuidValue::create()->value(),
            'nombre' => StringUtils::capitalizar($faker),
            'codigo' => StringUtils::minusculas($faker),
        ];
    }
}
