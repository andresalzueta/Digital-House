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
        $role_admin->description = 'Administrator User Level';
        $role_admin->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'Manager User Level';
        $role_manager->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'Simple User Level';
        $role_user->save();

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->description = 'Customer User Level';
        $role_customer->save();
    }

}
