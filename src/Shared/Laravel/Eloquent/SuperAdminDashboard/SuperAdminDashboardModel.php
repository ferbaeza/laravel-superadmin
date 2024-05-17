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

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'remember_token',
        'last_activity',
    ];

    protected static function newFactory()
    {
        return SuperAdminDashboardFactory::new();
    }


}

