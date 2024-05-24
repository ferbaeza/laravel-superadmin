<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Application;

use Baezeta\Admin\Shared\Base\CommandQueryBase;

class CrearMenuDashboard extends CommandQueryBase
{
    public function __construct(
        public readonly string $nombre,
        public readonly string $codigoPadre,
    )
        {
            parent::__construct();
    }
}
