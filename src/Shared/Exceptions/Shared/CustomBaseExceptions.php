<?php

namespace Baezeta\Admin\Shared\Exceptions\Shared;

use Baezeta\Admin\Shared\Exceptions\PackageBaseException;

class CustomBaseExceptions extends PackageBaseException
{
    protected static $messages = [
        CustomBaseExceptions::class => 'CustomBaseExceptions',
    ];


}
