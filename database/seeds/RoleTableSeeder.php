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
         $role = Role::firstOrCreate([
            'name'  => 'Administrator',
            'label' => 'administrator',
        ]); 

         $role = Role::firstOrCreate([
            'name'  => 'Librarian',
            'label' => 'librarian',
        ]);            

         $role = Role::firstOrCreate([
            'name'  => 'Faculty',
            'label' => 'faculty',
        ]);      

         $role = Role::firstOrCreate([
            'name'  => 'Student',
            'label' => 'student',
        ]);
    }
}
