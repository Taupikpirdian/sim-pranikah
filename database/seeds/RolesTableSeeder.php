<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'List Roles';
        $role->save();

        $role = new Role();
        $role->name = 'Create Role';
        $role->save();

        $role = new Role();
        $role->name = 'Details Role';
        $role->save();

        $role = new Role();
        $role->name = 'Edit Role';
        $role->save();

        $role = new Role();
        $role->name = 'Delete Role';
        $role->save();

        $role = new Role();
        $role->name = 'Search Role';
        $role->save();


        $role = new Role();
        $role->name = 'List Groups';
        $role->save();

        $role = new Role();
        $role->name = 'Create Group';
        $role->save();

        $role = new Role();
        $role->name = 'Details Group';
        $role->save();

        $role = new Role();
        $role->name = 'Edit Group';
        $role->save();

        $role = new Role();
        $role->name = 'Delete Group';
        $role->save();

        $role = new Role();
        $role->name = 'Search Group';
        $role->save();


        $role = new Role();
        $role->name = 'List User Groups';
        $role->save();

        $role = new Role();
        $role->name = 'Create User Group';
        $role->save();

        $role = new Role();
        $role->name = 'Details User Group';
        $role->save();

        $role = new Role();
        $role->name = 'Edit User Group';
        $role->save();

        $role = new Role();
        $role->name = 'Delete User Group';
        $role->save();

        $role = new Role();
        $role->name = 'Search User Group';
        $role->save();

        $role = new Role();
        $role->name = 'List Group Roles';
        $role->save();

        $role = new Role();
        $role->name = 'Create Group Role';
        $role->save();

        $role = new Role();
        $role->name = 'Details Group Role';
        $role->save();

        $role = new Role();
        $role->name = 'Edit Group Role';
        $role->save();

        $role = new Role();
        $role->name = 'Delete Group Role';
        $role->save();

        $role = new Role();
        $role->name = 'Search Group Role';
        $role->save();

        //User
        $role = new Role();
        $role->name = 'List User';
        $role->save();

        $role = new Role();
        $role->name = 'Create User';
        $role->save();

        $role = new Role();
        $role->name = 'Details User';
        $role->save();

        $role = new Role();
        $role->name = 'Edit User';
        $role->save();

        $role = new Role();
        $role->name = 'Delete User';
        $role->save();

        $role = new Role();
        $role->name = 'Search User';
        $role->save();

        //Kua
        $role = new Role();
        $role->name = 'Kua';
        $role->save();

        $role = new Role();
        $role->name = 'List Kua';
        $role->save();

        $role = new Role();
        $role->name = 'Create Kua';
        $role->save();

        $role = new Role();
        $role->name = 'Details Kua';
        $role->save();

        $role = new Role();
        $role->name = 'Edit Kua';
        $role->save();

        $role = new Role();
        $role->name = 'Delete Kua';
        $role->save();

        $role = new Role();
        $role->name = 'Search Kua';
        $role->save();

        //Puskesmas
        $role = new Role();
        $role->name = 'Puskesmas';
        $role->save();

        $role = new Role();
        $role->name = 'List Puskesmas';
        $role->save();

        $role = new Role();
        $role->name = 'Create Puskesmas';
        $role->save();

        $role = new Role();
        $role->name = 'Details Puskesmas';
        $role->save();

        $role = new Role();
        $role->name = 'Edit Puskesmas';
        $role->save();

        $role = new Role();
        $role->name = 'Delete Puskesmas';
        $role->save();

        $role = new Role();
        $role->name = 'Search Puskesmas';
        $role->save();

        //Dp3akb
        $role = new Role();
        $role->name = 'Dp3akb';
        $role->save();

        $role = new Role();
        $role->name = 'List Dp3akb';
        $role->save();

        $role = new Role();
        $role->name = 'Create Dp3akb';
        $role->save();

        $role = new Role();
        $role->name = 'Details Dp3akb';
        $role->save();

        $role = new Role();
        $role->name = 'Edit Dp3akb';
        $role->save();

        $role = new Role();
        $role->name = 'Delete Dp3akb';
        $role->save();

        $role = new Role();
        $role->name = 'Search Dp3akb';
        $role->save();
    }
}

