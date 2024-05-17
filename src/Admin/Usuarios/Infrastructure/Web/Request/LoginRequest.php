<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Web\Request;

use Baezeta\Admin\Shared\Laravel\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
}
