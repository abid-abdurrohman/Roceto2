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
    	/*Untuk Grup Futsal*/
         $participants = array(
          array(
            'nama_tim' => 'Arsenal',
            'logo_tim' => 'images/participant/1/arsenal.png',
            'no_hp' => '085673829399',
            'email' => 'admin@arsenal.com',
            'warna_kostum' => 'Merah Putih',
            'jumlah_pemain' => '15',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Manchester United',
            'logo_tim' => 'images/participant/1/mu.png',
            'no_hp' => '08567782190232',
            'email' => 'admin@mu.com',
            'warna_kostum' => 'Merah Hitam',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'FC Barcelona',
            'logo_tim' => 'images/participant/1/barca.png',
            'no_hp' => '08567782190312',
            'email' => 'admin@barca.com',
            'warna_kostum' => 'Merah Kuning',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'AJAX Amsterdam',
            'logo_tim' => 'images/participant/1/ajax.png',
            'no_hp' => '08137782190232',
            'email' => 'admin@ajax.com',
            'warna_kostum' => 'Orange Putih',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Chelsea',
            'logo_tim' => 'images/participant/1/chelsea.png',
            'no_hp' => '085673829399',
            'email' => 'admin@chelsea.com',
            'warna_kostum' => 'Biru Putih',
            'jumlah_pemain' => '15',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Tottenham',
            'logo_tim' => 'images/participant/1/tottenham.png',
            'no_hp' => '08567782192122',
            'email' => 'admin@tottenham.com',
            'warna_kostum' => 'Hitam Putih',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Real Madrid',
            'logo_tim' => 'images/participant/1/madrid.png',
            'no_hp' => '08567711190245',
            'email' => 'admin@realmadrid.com',
            'warna_kostum' => 'Hitam Emas',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Bayern Munchen',
            'logo_tim' => 'images/participant/1/munchen.png',
            'no_hp' => '08567782121232',
            'email' => 'admin@bayernmunchen.com',
            'warna_kostum' => 'Biru Hitam',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Juventus',
            'logo_tim' => 'images/participant/1/juventus.png',
            'no_hp' => '08567782111132',
            'email' => 'admin@juventus.com',
            'warna_kostum' => 'Putih Hitam',
            'jumlah_pemain' => '12',
            'status' => 'waiting',
            'event_id' => '1',
            'user_id'      => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('participants')->insert($participants);
    }
}
