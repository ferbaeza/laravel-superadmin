<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Enums;

use Baezeta\Admin\Shared\Utils\Validadores\StringValidador;

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
            'int', 'int2', 'int4', 'int8'=> self::INT,
            'timestamp' => self::TIMESTAMP,
            'uuid' => self::UUID,
            default => throw new \Exception("Tipo de dato no soportado: $type"),
        };
    }

}
