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
         $users = array(
          array(
            'name' => 'Admin',
            'nick_name' => 'Admin',
            'email' => 'admin@roceto.com',
            'password' => Hash::make('admin'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Adang',
            'nick_name' => 'Adang',
            'email' => 'adang@roceto.com',
            'password' => Hash::make('adang'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Nisa',
            'nick_name' => 'Nisa',
            'email' => 'nisa@roceto.com',
            'password' => Hash::make('nisa'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Abid',
            'nick_name' => 'Abid',
            'email' => 'abid@roceto.com',
            'password' => Hash::make('abid'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Majid',
            'nick_name' => 'Majid',
            'email' => 'majid@roceto.com',
            'password' => Hash::make('majid'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Dika',
            'nick_name' => 'Dika',
            'email' => 'dika@roceto.com',
            'password' => Hash::make('dika'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Unggul',
            'nick_name' => 'Unggul',
            'email' => 'unggul@roceto.com',
            'password' => Hash::make('unggul'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Jundi',
            'nick_name' => 'Jundi',
            'email' => 'jundi@roceto.com',
            'password' => Hash::make('jundi'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ), array(
            'name' => 'Tica',
            'nick_name' => 'Tica',
            'email' => 'tica@roceto.com',
            'password' => Hash::make('tica'),
            'avatar' => 'images/users/admin.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),
          );
        // Comment the below to stop the seeder
        DB::table('users')->insert($users);
    }
}
