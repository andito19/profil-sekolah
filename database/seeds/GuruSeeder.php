<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('gurus')->insert([
        [
          'Nip' => rand(1, 100000),
          'Nama' => 'Guru Satu',
          'Tempat_lahir' => 'Jakarta',
          'Tgl_lahir' => '2001-03-16',
          'Jk' => 'Pria',
          'Alamat' => 'Swadaya Gudang Baru',
        ],
        [
          'Nip' => rand(1, 100000),
          'Nama' => 'Guru Dua',
          'Tempat_lahir' => 'Jakarta',
          'Tgl_lahir' => '2001-03-17',
          'Jk' => 'Pria',
          'Alamat' => 'Swadaya Gudang Lama',
        ],
        [
          'Nip' => rand(1, 100000),
          'Nama' => 'Guru Tiga',
          'Tempat_lahir' => 'Jakarta',
          'Tgl_lahir' => '2001-03-18',
          'Jk' => 'Pria',
          'Alamat' => 'Swadaya Gudang Tua',
        ],
        [
          'Nip' => rand(1, 100000),
          'Nama' => 'Guru Empat',
          'Tempat_lahir' => 'Jakarta',
          'Tgl_lahir' => '2001-03-19',
          'Jk' => 'Pria',
          'Alamat' => 'Swadaya Gudang Muda',
        ]

      ]);
    }
}
