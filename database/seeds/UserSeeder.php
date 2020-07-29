<?php

use App\Models\Role;
use App\Models\Permission;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug', 'admin')->first();
        $pm = Role::where('slug', 'project-manager')->first();
        $developer = Role::where('slug', 'web-developer')->first();

        $deleteUsers = Permission::where('slug', 'delete-users')->get();
        $addPost = Permission::where('slug', 'add-post')->get();
        $editCategory = Permission::where('slug', 'edit-category')->get();

        $newUsers = [
          ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => '11111111', 'role' => $admin, 'permission' => $deleteUsers],
          ['name' => 'John Doe', 'email' => 'john.d@gmail.com', 'password' => '11111111', 'role' => $pm, 'permission' => $addPost],
          ['name' => 'Alex Bolgar', 'email' => 'lexa.x@gmail.com', 'password' => '11111111', 'role' => $developer, 'permission' => $editCategory],
        ];

        foreach ($newUsers as $newUser) {
            $user = new User();
            $user->name = $newUser['name'];
            $user->email = $newUser['email'];
            $user->password = bcrypt($newUser['password']);
            $user->remember_token = Str::random(10);
            $user->save();
            $user->roles()->attach($newUser['role']);
            $user->permissions()->attach($newUser['permission']);
        }
    }
}
