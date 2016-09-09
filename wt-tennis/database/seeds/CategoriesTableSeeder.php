<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
          array(
            'nama' => 'Group',
            'thumbnail' => 'images/category/Futsal.jpg',
            'Peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan</li>
                            </ol>',
            'biaya_pendaftaran' => '200000',
            'Kuota' => '8',
            'event_id' => '1',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Group',
            'thumbnail' => 'images/category/635917587797106346-USP-NCAA-BASKETBALL-UTAH-AT-OREGON-79491238.JPG',
            'Peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan<br /><br /></li>
                            </ol>',
            'biaya_pendaftaran' => '250000',
            'Kuota' => '8',
            'event_id' => '2',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Individu',
            'thumbnail' => 'images/category/tenis.JPG',
            'Peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan<br /><br /></li>
                            </ol>',
            'biaya_pendaftaran' => '220000',
            'Kuota' => '8',
            'event_id' => '3',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Group',
            'thumbnail' => 'images/category/tenis.JPG',
            'Peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan<br /><br /></li>
                            </ol>',
            'biaya_pendaftaran' => '220000',
            'Kuota' => '8',
            'event_id' => '3',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Group',
            'thumbnail' => '',
            'Peraturan' => '',
            'biaya_pendaftaran' => '',
            'Kuota' => '',
            'event_id' => '4',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Individu',
            'thumbnail' => '',
            'Peraturan' => '',
            'biaya_pendaftaran' => '',
            'Kuota' => '',
            'event_id' => '5',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Individu',
            'thumbnail' => '',
            'Peraturan' => '',
            'biaya_pendaftaran' => '',
            'Kuota' => '',
            'event_id' => '6',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Individu',
            'thumbnail' => '',
            'Peraturan' => '',
            'biaya_pendaftaran' => '',
            'Kuota' => '',
            'event_id' => '7',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Individu',
            'thumbnail' => '',
            'Peraturan' => '',
            'biaya_pendaftaran' => '',
            'Kuota' => '',
            'event_id' => '8',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('categories')->insert($categories);
    }
}
