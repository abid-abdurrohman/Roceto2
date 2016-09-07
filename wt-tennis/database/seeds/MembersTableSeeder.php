<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = array(
          array(
            'nama' => 'Shkodran Mustafi',
            'jk' => 'L',
            'tgl_lhr' => '2016-09-06',
            'no_hp' => '082167453377',
            'posisi' => 'Bek',
            'no_punggung' => '20',
            'foto' => 'images/player/1/Shkodran_Mustafi.jpg',
            'participant_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Mesut Ozil',
            'jk' => 'L',
            'tgl_lhr' => '2016-09-06',
            'no_hp' => '082167453377',
            'posisi' => 'Gelandang',
            'no_punggung' => '11',
            'foto' => 'images/player/1/Mesut_Ozil.jpg',
            'participant_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Granit Xhaka',
            'jk' => 'L',
            'tgl_lhr' => '2016-09-06',
            'no_hp' => '082167453377',
            'posisi' => 'Gelandang',
            'no_punggung' => '29',
            'foto' => 'images/player/1/Granit_Xhaka.jpg',
            'participant_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Alexis Sanchez',
            'jk' => 'L',
            'tgl_lhr' => '2016-09-06',
            'no_hp' => '082167453377',
            'posisi' => 'Penyerang',
            'no_punggung' => '7',
            'foto' => 'images/player/2/Alexis_Sanchez.jpg',
            'participant_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Lucas Perez',
            'jk' => 'L',
            'tgl_lhr' => '2016-09-06',
            'no_hp' => '082167453377',
            'posisi' => 'Penyerang',
            'no_punggung' => '9',
            'foto' => 'images/player/2/Lucas_Perez.jpg',
            'participant_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Olivier Giroud',
            'jk' => 'L',
            'tgl_lhr' => '2016-09-06',
            'no_hp' => '082167453377',
            'posisi' => 'Penyerang',
            'no_punggung' => '12',
            'foto' => 'images/player/2/Olivier_Giroud.jpg',
            'participant_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('members')->insert($members);
    }
}
