<?php

namespace Baezeta\Admin\Shared\Bus;

use Baezeta\Admin\Shared\Bus\BusHandler;
use Baezeta\Admin\Shared\Laravel\Middleware\TransaccionMiddleware;

class BusFacade
{
    public static function create()
    {
        return new Bus(
            TransaccionMiddleware::class,
            BusHandler::class
        );
    }

    public static function process($dto)
    {
        return self::create()->handle($dto);
    }
}
