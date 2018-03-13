<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        
        $admin->attachPermission($createUser);
        // equivalent to $admin->perms()->sync(array($createPost->id));
        
        $owner->attachPermissions(array($createUser, $editUser));
        // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));
    }
    /* $permission  = [
            [
                'name'          =>  'role-read',
                'display_name'  =>  'Display role Listing',
                'description'   =>  'see Only listing Of role'
            ],
            [
                'name'          =>  'role-create',
                'display_name'  =>  'create Role',
                'description'   =>  'create Role'
            ],
            [
                'name'          =>  'role-edit',
                'display_name'  =>  'edit role',
                'description'   =>  'edit role'
            ],
            [
                'name'          =>  'role-delete',
                'display_name'  =>  'Delete role',
                'description'   =>  'Delete role'
            ]
      ];
      foreach($permission as $key => $value){
        App\Permission::create($value);

      }
      */
}
