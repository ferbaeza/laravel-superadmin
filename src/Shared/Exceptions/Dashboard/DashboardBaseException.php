<?php

namespace Baezeta\Admin\Shared\Exceptions\Dashboard;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;
use Baezeta\Admin\Shared\Exceptions\Dashboard\RoleAdminNoExisteException;
use Baezeta\Admin\Shared\Exceptions\Dashboard\CategoriaPrincipalMenuNoExisteException;

class DashboardBaseException extends PackageBaseException
{
    protected static $messages = [
        CategoriaPrincipalMenuNoExisteException::class => CategoriaPrincipalMenuNoExisteException::MESSAGE,
        RoleAdminNoExisteException::class => RoleAdminNoExisteException::MESSAGE,
    ];

}
