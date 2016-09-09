<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('AdminsTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ParticipantsTableSeeder');    
        $this->call('NewsTableSeeder');
        $this->call('MembersTableSeeder');
    }
}
