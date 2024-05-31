<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use Baezeta\Admin\Shared\Base\CommandQueryBase;

class ObtenerDetalleTablaCommand extends CommandQueryBase
{
    public function __construct(
        public readonly string $idTabla
    )
        { parent::__construct();
    }

}
