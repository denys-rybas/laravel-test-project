<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $name = 'roles';

    protected $fillable = ['name', 'slug'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
