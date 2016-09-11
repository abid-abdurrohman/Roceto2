<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = array(
         array(
           'no_match' => '1',
           'nama' => 'Match 1',
           'waktu' => '2016-09-16',
           'tempat' => 'Depok',
           'status' => 'playing',
           'youtube' => 'https://www.youtube.com/watch?v=rKJ_1uRfyuA',
           'deskripsi' => '<p>Please welcome</p>',
           'category_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '1',
           'nama' => 'Match 2',
           'waktu' => '2016-09-16',
           'tempat' => 'Jakarta',
           'status' => 'playing',
           'youtube' => 'https://www.youtube.com/watch?v=gbzuImQrIgo',
           'deskripsi' => '<p>Please welcome</p>',
           'category_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '1',
           'nama' => 'Match 3',
           'waktu' => '2016-09-16',
           'tempat' => 'Bandung',
           'status' => 'playing',
           'youtube' => 'https://www.youtube.com/watch?v=PIlFyXucIhw',
           'deskripsi' => '<p>Please welcome</p>',
           'category_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         ),array(
           'no_match' => '1',
           'nama' => 'Match 4',
           'waktu' => '2016-09-16',
           'tempat' => 'Karawang',
           'status' => 'playing',
           'youtube' => 'https://www.youtube.com/watch?v=mx6t6E24SSM',
           'deskripsi' => '<p>Please welcome</p>',
           'category_id' => '1',
           'created_at' => DB::raw('NOW()'),
           'updated_at' => DB::raw('NOW()'),
         )
       );
       // Comment the below to stop the seeder
       DB::table('matches')->insert($matches);
    }
}
