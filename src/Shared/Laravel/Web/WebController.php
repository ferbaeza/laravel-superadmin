<?php

namespace Baezeta\Admin\Shared\Laravel\Web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function show()
    {
        return view('plantilla::index');
    }


}
