<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = Role::where('name', 'admin')->first();
        $role_manager  = Role::where('name', 'manager')->first();
        $role_user  = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'admin@example.com';
        // $admin->password = bcrypt('a123456!');
        $admin->password = Hash::make('a123456!');
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        $manager = new User();
        $manager->name = 'Manager QFDH';
        $manager->email = 'manager@example.com';
        //$manager->password = bcrypt('secret');
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $user = new User();
        $user->name = 'Simple User';
        $user->email = 'user@example.com';
        //$user->password = bcrypt('secret');
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);
    }

}
