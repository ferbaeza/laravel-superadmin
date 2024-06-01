<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRolesPermisos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminRolesPermisos\SuperAdminRolesPermisosFactory;

class SuperAdminRolesPermisosModel extends Model
{
    use HasFactory;

    protected $table = 'superadmin_roles_permisos';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'fk_role_id',
        'fk_permiso_id',
    ];

    protected static function newFactory()
    {
        return SuperAdminRolesPermisosFactory::new();
    }
}
