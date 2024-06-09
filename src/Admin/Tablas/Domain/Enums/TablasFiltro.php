<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Enums;

use Baezeta\Admin\Shared\Utils\Validadores\UuidValidador;
use Baezeta\Admin\Shared\Utils\Validadores\FechaValidador;
use Baezeta\Admin\Shared\Utils\Validadores\StringValidador;
use Baezeta\Admin\Shared\Utils\Validadores\IntegerValidador;

enum TablasFiltro
{
    case VARCHAR;
    case INT;
    case INT2;
    case INT4;
    case INT8;
    case TIMESTAMP;
    case UUID;

    public static function ocultas(): array
    {
        return config('package.settings.tablas.ocultar');
    }

    public static function from(string $type)
    {
        return match ($type) {
            'varchar' => new StringValidador(),
            'int', 'int2', 'int4', 'int8'=> new IntegerValidador(),
            'timestamp', 'timestamptz', 'created_at', 'updated_at', 'deleted_at' => new FechaValidador(),
            'uuid' => new UuidValidador(),
            default => new StringValidador(),
        };
    }

}
