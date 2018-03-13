<?php

use Illuminate\Database\Seeder;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'user_name'     =>  'Amit kumar',
            'email'         =>  'amit@creatise.in',
            'password'      =>  bcrypt('password'),
            'degination'    => 'admin',
            'email_password'=> bcrypt('password'),
            'is_active'     => 'yes',
            'is_deleted'    => 'no'
        ]);
        App\Profile::create([
            'user_id'        => $user->id,
            'profile_pic'    =>  'uploads/profile/1.jpg'

        ]);
        
        
        
    }
}
