<?php

namespace Baezeta\Admin\Shared\Laravel\Controller;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public readonly string $inicio;

    function __invoke()
    {
        return today();
    }
}
