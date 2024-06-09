<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use stdClass;
use Baezeta\Admin\Shared\Base\CommandQueryBase;

class CrearRegistroTablaCommand extends CommandQueryBase
{
    public function __construct(
        public readonly string $idTabla,
        public readonly stdClass $values,
    )
        { parent::__construct();
    }

}
