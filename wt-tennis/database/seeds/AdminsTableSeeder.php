<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // uncomment the below to wipe the table clean before populating
        // DB::table('admins')->truncate();
        $admin = array(
        	'username' => 'admin@roceto.com',
        	'password' => Hash::make('admin'),
        	'created_at' => DB::raw('NOW()'),
        	'updated_at' => DB::raw('NOW()'),
        );
        // Comment the below to stop the seeder
        DB::table('admins')->insert($admin);
    }
}
