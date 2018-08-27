<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Administrator User';
        $role_admin->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'A Manager User';
        $role_manager->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A Simple User';
        $role_user->save();

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->description = 'A Simple Customer';
        $role_customer->save();
    }

}
