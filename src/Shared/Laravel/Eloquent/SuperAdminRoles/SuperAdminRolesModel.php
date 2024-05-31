<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRoles\SuperAdminRolesFactory;

class SuperAdminRolesModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'superadmin_roles';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'nombre',
        'codigo',
    ];

    protected static function newFactory()
    {
        return SuperAdminRolesFactory::new();
    }
}
