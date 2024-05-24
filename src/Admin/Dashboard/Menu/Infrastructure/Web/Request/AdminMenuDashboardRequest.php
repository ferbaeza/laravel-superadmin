<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Infrastructure\Web\Request;

use Baezeta\Admin\Shared\Laravel\Requests\BaseRequest;

class AdminMenuDashboardRequest extends BaseRequest
{
    public function rules() : array
    {
        return [
            'nombre' => 'required|string',
            'codigoPadre' => 'required|string',
        ];
    }

}
