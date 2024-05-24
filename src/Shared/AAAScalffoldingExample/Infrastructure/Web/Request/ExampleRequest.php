<?php

namespace Baezeta\Admin\Shared\AAAScalffoldingExample\Infrastructure\Web\Request;

use Baezeta\Admin\Shared\Laravel\Requests\BaseRequest;

class ExampleRequest extends BaseRequest
{
    public function rules() : array
    {
        return [
            'nombre' => 'required|string',
            'codigoPadre' => 'required|string',
        ];
    }

}
