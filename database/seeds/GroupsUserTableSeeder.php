<?php

use Illuminate\Database\Seeder;
use App\Group;
use App\Role;

class GroupsUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group();
        $group->id = 5;
        $group->name = 'User';
        $group->save();
    }
}
