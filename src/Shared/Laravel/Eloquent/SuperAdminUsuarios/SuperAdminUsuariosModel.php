<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosFactory;

class SuperAdminUsuariosModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'superadmin_usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'estado',
        'last_activity',
    ];

    protected static function newFactory()
    {
        return SuperAdminUsuariosFactory::new();
    }
}
