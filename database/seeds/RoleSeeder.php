<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleNames = ['Admin', 'Project manager', 'Web developer'];
        foreach ($roleNames as $name) {
            $role = new Role();
            $role->name = $name;
            $role->slug = Str::slug($name);
            $role->save();
        }
    }
}
