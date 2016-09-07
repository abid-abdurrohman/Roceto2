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
            'nama_tim' => 'Chelsea',
            'no_hp' => '0812223322121',
            'warna_kostum' => 'Hitam Emas',
            'jumlah_pemain' => '12',
            'atas_nama'=> 'Ragmat',
            'no_rek' => '1023182738293849192',
            'nama_bank' => 'BRI',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'M.U',
            'no_hp' => '08567782190232',
            'warna_kostum' => 'Merah Hitam',
            'jumlah_pemain' => '12',
            'atas_nama'=> 'Mona',
            'no_rek' => '110283472910631829',
            'nama_bank' => 'Mandiri',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Barca',
            'no_hp' => '08567782190312',
            'warna_kostum' => 'Merah Kuning',
            'jumlah_pemain' => '12',
            'atas_nama'=> 'Aqi',
            'no_rek' => '28108237109238',
            'nama_bank' => 'BCA',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Arsenal',
            'no_hp' => '08137782190232',
            'warna_kostum' => 'Merah Putih',
            'jumlah_pemain' => '12',
            'atas_nama'=> 'Ango',
            'no_rek' => '102233102938',
            'nama_bank' =>'BNI',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Tottenham',
            'no_hp' => '08567782192122',
            'warna_kostum' => 'Hitam Putih',
            'jumlah_pemain' => '12',
            'atas_nama'=> 'Ono',
            'no_rek' => '91910101212121',
            'nama_bank' => 'BRI',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Real Madrid',
            'no_hp' => '08567711190245',
            'warna_kostum' => 'Hitam Emas',
            'jumlah_pemain' => '12',
            'atas_nama'=> 'Naz',
            'no_rek' =>'929191921102020',
            'nama_bank' =>'BCA',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Persib',
            'no_hp' => '08567782121232',
            'warna_kostum' => 'Biru Hitam',
            'jumlah_pemain' => '12',
            'atas_nama'=>'Mersa',
            'no_rek' =>'22192010938910',
            'nama_bank' =>'Mandiri',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama_tim' => 'Persija',
            'no_hp' => '08567782111132',
            'warna_kostum' => 'Oren Hitam',
            'jumlah_pemain' => '12',
            'atas_nama'=>'Nonong',
            'no_rek' =>'327461876482418',
            'nama_bank' =>'BCA',
            'category_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('participants')->insert($participants);
    }
}
