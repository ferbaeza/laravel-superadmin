<?php

namespace Baezeta\Admin\Admin\Role\Application;

use Baezeta\Admin\Shared\Base\CommandQueryBase;

class ObtenerFichaRoleAdminCommand extends CommandQueryBase
{
    public function __construct(
        public readonly int $codigo,
    )
        {
            parent::__construct();
    }

}
