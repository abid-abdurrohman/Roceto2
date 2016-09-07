<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $participants = array(
          array(
            'nama_tim' => 'Arsenal',
            'no_hp' => '085673829399',
            'email' => 'admin@arsenal.com',
            'warna_kostum' => 'Merah Putih',
            'jumlah_pemain' => '15',
            'status' => 'waiting',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Chelsea',
            'no_hp' => '085673829399',
            'email' => 'admin@chelsea.com',
            'warna_kostum' => 'Biru Putih',
            'jumlah_pemain' => '15',
            'status' => 'waiting',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('participants')->insert($participants);
    }
}
