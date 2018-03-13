<?php

use Illuminate\Database\Seeder;
use App\role;
use App\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();
        
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $user = User::where('email', '=', 'amit@creatise.in')->first();
        // role attach alias
        $user->attachRole($admin); // parameter can be an Role object, array, or id


        
    }

/*
 $role = App\Role ::create(
            [
            'name'          =>  'admin',
            'display_name'	=> 'Administrator', // optional
            'description'	=> 'administer the website and manage users', // optional
            ]
        );
        $permissions 	= ['1','2','3', '4']; // optional
        
        foreach($permissions as $key=>$value){
            $role->attachPermission($value);
        }

        */
}