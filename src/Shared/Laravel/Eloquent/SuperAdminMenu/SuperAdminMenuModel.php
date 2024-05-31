<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminMenu\SuperAdminMenuFactory;

class SuperAdminMenuModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'superadmin_menu';
    public $timestamps = false;
    public $incrementing = false;



    protected $fillable = [
        'nombre',
        'route',
        'codigo',
        'codigo_padre',
    ];

    protected static function newFactory()
    {
        return SuperAdminMenuFactory::new();
    }
}
