<?php

namespace Baezeta\Admin\Shared\Bus\Domain;

use Baezeta\Admin\Shared\Bus\Infrastructure\BusHandler;
use Baezeta\Admin\Shared\Bus\Middleware\TransaccionMiddleware;

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
