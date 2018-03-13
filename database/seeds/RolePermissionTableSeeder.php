<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $caller = new Role();
        $caller->name         = 'Caller';
        $caller->display_name = 'Caller'; // optional
        $caller->description  = 'User Can manage company and their Contact details'; // optional
        $caller->save();

        $user = User::where('email', '=', 'amit@creatise.in')->first();
        // role attach alias
        $user->attachRole($admin); // parameter can be an Role object, array, or id

        $createUser = new Permission();
        $createUser->name         = 'create-user';
        $createUser->display_name = 'Create users'; // optional
        // Allow a user to...
        $createUser->description  = 'create new user'; // optional
        $createUser->save();
        
        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users'; // optional
        // Allow a user to...
        $editUser->description  = 'edit existing users'; // optional
        $editUser->save();
        
        $caller->attachPermission($createUser);
        // equivalent to $admin->perms()->sync(array($createPost->id));
        
        $admin->attachPermissions(array($createUser, $editUser));
        // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));
    }
}
