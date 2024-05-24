<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity;

use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Admin\Dashboard\Menu\Application\CrearMenuDashboard;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\CodigoMenuEntity;

class AdminMenuEntity
{
    public function __construct(
        public readonly UuidValue $id,
        public readonly string $nombre,
        public readonly string $codigo,
        public readonly string $codigoPadre,
    )
        {
    
    }

    public static function fromCommand(CrearMenuDashboard $command, CodigoMenuEntity $nextCodigo): self
    {
        return new self(
            id: UuidValue::create(),
            nombre: $command->nombre,
            codigo: $nextCodigo->codigo,
            codigoPadre: $command->codigoPadre,
        );
    }
}
