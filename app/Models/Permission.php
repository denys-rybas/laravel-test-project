<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $name = 'permissions';

    protected $fillable = ['name', 'slug'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}
