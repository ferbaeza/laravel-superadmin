<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\Request;

use Baezeta\Admin\Shared\Laravel\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }
}
