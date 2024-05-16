<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDashboard\SuperAdminDashboardFactory;

class SuperAdminDashboardModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'superadmin_dashboard';

    // protected $fillable = [
    //     'nombre',
    //     'descripcion',
    //     'fk_tipo_id',
    //     'fk_rol_sistema_id',
    //     'duracion',
    //     'agendable',
    // ];

    protected static function newFactory()
    {
        return SuperAdminDashboardFactory::new();
    }


}

