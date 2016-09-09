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
        $this->call('AdminsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('CategoriesTableSeeder');
<<<<<<< HEAD
        $this->call('UsersTableSeeder');
        $this->call('ParticipantsTableSeeder');    
        $this->call('NewsTableSeeder');
        $this->call('MembersTableSeeder');
=======
        $this->call('ParticipantsTableSeeder');
        $this->call('MembersTableSeeder');
        $this->call('NewsTableSeeder');
        $this->call('SponsorsTableSeeder');
>>>>>>> 11cb560790c5a09838dc628504c141997fe796b0
    }
}
