<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionNames = ['Delete users', 'Add post', 'Edit category'];
        foreach ($permissionNames as $name) {
            $permission = new Permission();
            $permission->name = $name;
            $permission->slug = Str::slug($name);
            $permission->save();
        }
    }
}
