<?php

namespace Baezeta\Admin\Shared\Exceptions\Shared;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;
use Baezeta\Admin\Shared\Exceptions\Shared\ValidadorException;

class CustomBaseExceptions extends PackageBaseException
{
    protected static $messages = [
        CustomBaseExceptions::class => 'CustomBaseExceptions',
        ValidadorException::class => ValidadorException::MESSAGE,
    ];


}
