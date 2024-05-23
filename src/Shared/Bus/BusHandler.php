<?php

namespace Baezeta\Admin\Shared\Bus;

use Illuminate\Container\Container;

class BusHandler
{
    public function process($request, $handler)
    {
        $handler->handle($request);

        $class = get_class($request) . 'Handler';
        $casoUso = Container::getInstance()->make($class);

        return $casoUso->run($request);
    }

}
