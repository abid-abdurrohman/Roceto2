<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = 
          array(
            'name' => 'Admin',
            'nick_name' => 'Admin',
            'email' => 'admin@roceto.com',
            'password' => 'admin',
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          );
        // Comment the below to stop the seeder
        DB::table('users')->insert($users);
    }
}
