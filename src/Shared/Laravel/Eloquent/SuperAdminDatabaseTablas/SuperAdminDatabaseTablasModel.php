<?php

namespace Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasFactory;

class SuperAdminDatabaseTablasModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'superadmin_database_tablas';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'nombre',
        'columnas',
    ];

    protected static function newFactory()
    {
        return SuperAdminDatabaseTablasFactory::new();
    }
}
