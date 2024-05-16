<?php

namespace Baezeta\Admin\Shared\Laravel\Controller;

use App\Http\Controllers\Controller;
use Baezeta\Admin\Shared\Laravel\Middleware\TransaccionMiddleware;

class BaseController extends Controller
{
    public function __construct(
        protected TransaccionMiddleware $middleware,
    )
    {
    }

    public static function exec($command, $handler)
    {
        $self = new self(new TransaccionMiddleware());
        return $self->middleware->process($command, $handler);
    }
}
