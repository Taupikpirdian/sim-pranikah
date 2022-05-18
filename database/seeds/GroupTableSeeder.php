<?php

use Illuminate\Database\Seeder;
use App\Group;
use App\Role;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_list_group  = Role::where('name', 'List Groups')->first();
        $role_create_group  = Role::where('name', 'Create Group')->first();
        $role_details_group  = Role::where('name', 'Details Group')->first();
        $role_edit_group  = Role::where('name', 'Edit Group')->first();
        $role_delete_group  = Role::where('name', 'Delete Group')->first();
        $role_search_group  = Role::where('name', 'Search Group')->first();

        $role_list_role  = Role::where('name', 'List Roles')->first();
        $role_create_role  = Role::where('name', 'Create Role')->first();
        $role_details_role  = Role::where('name', 'Details Role')->first();
        $role_edit_role  = Role::where('name', 'Edit Role')->first();
        $role_delete_role  = Role::where('name', 'Delete Role')->first();
        $role_search_role  = Role::where('name', 'Search Role')->first();

        $role_list_user_group  = Role::where('name', 'List User Groups')->first();
        $role_create_user_group  = Role::where('name', 'Create User Group')->first();
        $role_details_user_group  = Role::where('name', 'Details User Group')->first();
        $role_edit_user_group  = Role::where('name', 'Edit User Group')->first();
        $role_delete_user_group  = Role::where('name', 'Delete User Group')->first();
        $role_search_user_group  = Role::where('name', 'Search User Group')->first();

        $role_list_group_role  = Role::where('name', 'List Group Roles')->first();
        $role_create_group_role  = Role::where('name', 'Create Group Role')->first();
        $role_details_group_role  = Role::where('name', 'Details Group Role')->first();
        $role_edit_group_role  = Role::where('name', 'Edit Group Role')->first();
        $role_delete_group_role  = Role::where('name', 'Delete Group Role')->first();
        $role_search_group_role  = Role::where('name', 'Search Group Role')->first();

        $role_kua  = Role::where('name', 'Kua')->first();
        $role_list_kua  = Role::where('name', 'List Kua')->first();
        $role_create_kua  = Role::where('name', 'Create Kua')->first();
        $role_details_kua  = Role::where('name', 'Details Kua')->first();
        $role_edit_kua  = Role::where('name', 'Edit Kua')->first();
        $role_delete_kua  = Role::where('name', 'Delete Kua')->first();
        $role_search_kua  = Role::where('name', 'Search Kua')->first();

        $role_puskesmas  = Role::where('name', 'Puskesmas')->first();
        $role_list_puskesmas  = Role::where('name', 'List Puskesmas')->first();
        $role_create_puskesmas  = Role::where('name', 'Create Puskesmas')->first();
        $role_details_puskesmas  = Role::where('name', 'Details Puskesmas')->first();
        $role_edit_puskesmas  = Role::where('name', 'Edit Puskesmas')->first();
        $role_delete_puskesmas  = Role::where('name', 'Delete Puskesmas')->first();
        $role_search_puskesmas  = Role::where('name', 'Search Puskesmas')->first();

        $role_dp3akb  = Role::where('name', 'Dp3akb')->first();
        $role_list_dp3akb  = Role::where('name', 'List Dp3akb')->first();
        $role_create_dp3akb  = Role::where('name', 'Create Dp3akb')->first();
        $role_details_dp3akb  = Role::where('name', 'Details Dp3akb')->first();
        $role_edit_dp3akb  = Role::where('name', 'Edit Dp3akb')->first();
        $role_delete_dp3akb  = Role::where('name', 'Delete Dp3akb')->first();
        $role_search_dp3akb  = Role::where('name', 'Search Dp3akb')->first();

    	$group = new Group();
        $group->id = 1;
        $group->name = 'Admin';
        $group->save();

        $group->roles()->attach($role_list_group);
        $group->roles()->attach($role_create_group);
        $group->roles()->attach($role_details_group);
        $group->roles()->attach($role_edit_group);
        $group->roles()->attach($role_delete_group);
        $group->roles()->attach($role_search_group);

        $group->roles()->attach($role_list_role);
        $group->roles()->attach($role_create_role);
        $group->roles()->attach($role_details_role);
        $group->roles()->attach($role_edit_role);
        $group->roles()->attach($role_delete_role);
        $group->roles()->attach($role_search_role);

        $group->roles()->attach($role_list_user_group);
        $group->roles()->attach($role_create_user_group);
        $group->roles()->attach($role_details_user_group);
        $group->roles()->attach($role_edit_user_group);
        $group->roles()->attach($role_delete_user_group);
        $group->roles()->attach($role_search_user_group);
        
        $group->roles()->attach($role_list_group_role);
        $group->roles()->attach($role_create_group_role);
        $group->roles()->attach($role_details_group_role);
        $group->roles()->attach($role_edit_group_role);
        $group->roles()->attach($role_delete_group_role);
        $group->roles()->attach($role_search_group_role);

        $group->roles()->attach($role_kua);
        $group->roles()->attach($role_list_kua);
        $group->roles()->attach($role_create_kua);
        $group->roles()->attach($role_details_kua);
        $group->roles()->attach($role_edit_kua);
        $group->roles()->attach($role_delete_kua);
        $group->roles()->attach($role_search_kua);

        $group->roles()->attach($role_puskesmas);
        $group->roles()->attach($role_list_puskesmas);
        $group->roles()->attach($role_create_puskesmas);
        $group->roles()->attach($role_details_puskesmas);
        $group->roles()->attach($role_edit_puskesmas);
        $group->roles()->attach($role_delete_puskesmas);
        $group->roles()->attach($role_search_puskesmas);

        $group->roles()->attach($role_dp3akb);
        $group->roles()->attach($role_list_dp3akb);
        $group->roles()->attach($role_create_dp3akb);
        $group->roles()->attach($role_details_dp3akb);
        $group->roles()->attach($role_edit_dp3akb);
        $group->roles()->attach($role_delete_dp3akb);
        $group->roles()->attach($role_search_dp3akb);

        $group = new Group();
        $group->id = 2;
        $group->name = 'Kua';
        $group->save();

        $group->roles()->attach($role_kua);
        $group->roles()->attach($role_list_kua);
        $group->roles()->attach($role_create_kua);
        $group->roles()->attach($role_details_kua);
        $group->roles()->attach($role_edit_kua);
        $group->roles()->attach($role_delete_kua);
        $group->roles()->attach($role_search_kua);

        $group = new Group();
        $group->id = 3;
        $group->name = 'Puskesmas';
        $group->save();

        $group->roles()->attach($role_puskesmas);
        $group->roles()->attach($role_list_puskesmas);
        $group->roles()->attach($role_create_puskesmas);
        $group->roles()->attach($role_details_puskesmas);
        $group->roles()->attach($role_edit_puskesmas);
        $group->roles()->attach($role_delete_puskesmas);
        $group->roles()->attach($role_search_puskesmas);

        $group = new Group();
        $group->id = 4;
        $group->name = 'Dp3akb';
        $group->save();

        $group->roles()->attach($role_dp3akb);
        $group->roles()->attach($role_list_dp3akb);
        $group->roles()->attach($role_create_dp3akb);
        $group->roles()->attach($role_details_dp3akb);
        $group->roles()->attach($role_edit_dp3akb);
        $group->roles()->attach($role_delete_dp3akb);
        $group->roles()->attach($role_search_dp3akb);

    }
}
