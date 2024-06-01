<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas;

use Baezeta\Admin\Shared\Utils\StringUtils;
use Illuminate\Foundation\Testing\WithFaker;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasModel;

class SuperAdminDatabaseTablasFactory extends Factory
{
    use WithFaker;

    protected $model = SuperAdminDatabaseTablasModel::class;

    public function definition()
    {
        return [
            'id' => UuidValue::create()->value(),
            'nombre' => StringUtils::capitalizar($this->faker->name),
            'columnas' => json_encode([
                [
                    'nombre' => 'id',
                    'tipo' => 'uuid',
                    'longitud' => 36,
                    'nulo' => false,
                    'unico' => true,
                    'autoincremental' => false,
                    'predeterminado' => null,
                    'comentario' => 'Identificador único de la tabla',
                ],
                [
                    'nombre' => 'created_at',
                    'tipo' => 'timestamp',
                    'longitud' => null,
                    'nulo' => false,
                    'unico' => false,
                    'autoincremental' => false,
                    'predeterminado' => null,
                    'comentario' => 'Fecha de creación del registro',
                ],
                [
                    'nombre' => 'updated_at',
                    'tipo' => 'timestamp',
                    'longitud' => null,
                    'nulo' => false,
                    'unico' => false,
                    'autoincremental' => false,
                    'predeterminado' => null,
                    'comentario' => 'Fecha de actualización del registro',
                ],
            ]),
        ];
    }
}
