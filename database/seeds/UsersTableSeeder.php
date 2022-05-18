<?php

use Illuminate\Database\Seeder;
use App\Group;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group  = Group::where('name', 'Admin')->first();
        $user_admin = new User();
        $user_admin->name = 'Enung';
        $user_admin->email = 'adminMaster@simpranikah.com';
        $user_admin->password = bcrypt('aaa123');
        $user_admin->save();
        $user_admin->groups()->attach($group);

        $group  = Group::where('name', 'Kua')->first();
        $user_admin = new User();
        $user_admin->name = 'Admin KUA';
        $user_admin->email = 'adminKua@simpranikah.com';
        $user_admin->password = bcrypt('aaa123');
        $user_admin->save();
        $user_admin->groups()->attach($group);

        $group  = Group::where('name', 'Puskesmas')->first();
        $user_admin = new User();
        $user_admin->name = 'Admin Puskesmas';
        $user_admin->email = 'adminPuskesmas@simpranikah.com';
        $user_admin->password = bcrypt('aaa123');
        $user_admin->save();
        $user_admin->groups()->attach($group);

        $group  = Group::where('name', 'Dp3akb')->first();
        $user_admin = new User();
        $user_admin->name = 'Admin DP3AKB';
        $user_admin->email = 'adminDp3akb@simpranikah.com';
        $user_admin->password = bcrypt('aaa123');
        $user_admin->save();
        $user_admin->groups()->attach($group);
    }
}
