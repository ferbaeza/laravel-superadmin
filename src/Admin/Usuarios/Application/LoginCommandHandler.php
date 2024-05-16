<?php

namespace Baezeta\Admin\Admin\Usuarios\Application;

class LoginCommandHandler
{
    public function __construct(	)
        {
    
    }

    public function run(LoginCommand $loginCommand)
    {
        return 'Hello From Login Handler';
    }
}
