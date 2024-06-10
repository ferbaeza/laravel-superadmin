<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\Request;

use Baezeta\Admin\Shared\Laravel\Requests\BaseRequest;

class RegistroRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'codigoRole' => 'bail|nullable|integer',
        ];
    }
}
