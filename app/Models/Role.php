<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

/**
 * Role model class
 * @author Md. Amzad Hossain Jacky <amzadhossain1922@gmail.com>
 */
class Role extends SpatieRole
{
    use HasFactory;

    protected $fillable = [
        'name',
        'guard_name',
        'route_segment',
        'is_active',
    ];
}