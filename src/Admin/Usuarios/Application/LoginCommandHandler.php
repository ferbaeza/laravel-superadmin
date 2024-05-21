<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

class LoginCommandHandler
{
    public function __construct(	)
        {
    
    }

    public function run(LoginCommand $loginCommand)
    {
        $mss = 'Hello From Login Handler';
        return ['mss' => $mss, 'data' => $loginCommand];
    }
}
