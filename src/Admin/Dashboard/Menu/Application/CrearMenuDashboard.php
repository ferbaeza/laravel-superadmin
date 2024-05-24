<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Application;

use Baezeta\Admin\Shared\Base\CommandQueryBase;

class CrearMenuDashboard EXTENDS CommandQueryBase
{
    public function __construct(
        public readonly string $name,
        public readonly string $codigoPadre,
    )
        {
            parent::__construct();
    }
}
