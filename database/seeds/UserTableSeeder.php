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
        $user = User::create([
            'name'      => 'Administrator',
            'username'  => 'admin',
            'email'  => 'admin@yahoo.com',
            'password'  => bcrypt('123456'),
            'status'    => 1
        ]);

        $role = Role::create([
            'name'    => 'Administrator',
            'label'   => 'administrator',
        ]); 

        $user->role()->associate($role)->save();

    }
}
