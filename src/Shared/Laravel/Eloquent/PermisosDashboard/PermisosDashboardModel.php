<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\PermisosDashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermisosDashboardModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'superadmin_permisos';
    public $timestamps = false;
    public $incrementing = false;



    protected $fillable = [
        'nombre',
    ];

    protected static function newFactory()
    {
        return PermisosDashboardFactory::new();
    }
}
