<?php

namespace Baezeta\Admin\Shared\Laravel\Seeders\Constants;

class RolesConstants
{

    public const SUPERADMIN = 'superadmin';
    public const ADMIN = 'admin';
    public const USER = 'user';

    public static function getRoles(): array
    {
        return [
            self::SUPERADMIN ,
            self::ADMIN ,
            self::USER ,
        ];
    }

}
