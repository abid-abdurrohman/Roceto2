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
        $this->call('UsersTableSeeder');
        $this->call('SponsorsTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('NewsTableSeeder');
        $this->call('EventsTableSeeder');
        $this->call('ParticipantsTableSeeder');
        $this->call('MembersTableSeeder');
        $this->call('MatchesTableSeeder');
        $this->call('Match_teamsTableSeeder');
        $this->call('Match_scoresTableSeeder');
        $this->call('RanksTableSeeder');
        $this->call('StatisticsTableSeeder');
    }
}
