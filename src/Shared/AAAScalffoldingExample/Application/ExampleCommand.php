<?php

namespace Baezeta\Admin\Shared\AAAScalffoldingExample\Application;

use Baezeta\Admin\Shared\Base\CommandQueryBase;

class ExampleCommand extends CommandQueryBase
{
    public function __construct(
        public readonly string $name,
        public readonly string $codigoPadre,
    )
        {
            parent::__construct();
    }
}
