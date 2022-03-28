<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Nama' => 'Anis Purwanti',
                'Alamat' => 'Mojokerto',
                'JenisKelamin' => 'Perempuan',
                'Email' => 'Anis1010@gmail.com',
                'Nomor' => '085334120890'
            ],
            [
                'Nama' => 'Diki Dermawan',
                'Alamat' => 'Malang',
                'JenisKelamin' => 'Laki Laki',
                'Email' => 'Dermawan@gmail.com',
                'Nomor' => '081297233010'
            ],
            [
                'Nama' => 'Selly Aulia',
                'Alamat' => 'Malang',
                'JenisKelamin' => 'Perempuan',
                'Email' => 'Selly@gmail.com',
                'Nomor' => '081239888008'
            ],
            [
                'Nama' => 'Andi Wiranto',
                'Alamat' => 'Pasuruan',
                'JenisKelamin' => 'Laki Laki',
                'Email' => 'Andi01@gmail.com',
                'Nomor' => '081334557120'
            ],
            [
                'Nama' => 'Risma Purwarida',
                'Alamat' => 'Gresik',
                'JenisKelamin' => 'Perempuan',
                'Email' => 'RiRis@gmail.com',
                'Nomor' => '082334100879'
            ],
            [
                'Nama' => 'Eko Danil',
                'Alamat' => 'Lawang',
                'JenisKelamin' => 'Laki Laki',
                'Email' => 'Eko10@gmail.com',
                'Nomor' => '081390008790'
            ]
        ];
        DB::table('pelanggans')->insert($data);
    }
}
