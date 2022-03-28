<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'NIK' => '2041720001',
                'Nama' => 'Anisa Bahar',
                'JK' => 'P',
                'Alamat' => 'Perumahan Gria Santa Malang Blok B No 16',
                'Level' => 'Staff',
                'Jabatan' => 'FA SPV',
                'Status' => 'AKTIF'

            ],
            [
                'NIK' => '2041720002',
                'Nama' => 'Fahreza Ramdhani',
                'JK' => 'L',
                'Alamat' => 'Perumahan Melati Blok C No 9, Malang',
                'Level' => 'Staff',
                'Jabatan' => 'Accounting',
                'Status' => 'AKTIF'

            ],
            [
                'NIK' => '2041720003',
                'Nama' => 'Caryna Noviana',
                'JK' => 'P',
                'Alamat' => 'Perumahahan Japan Raya Blok A No 10, Surabaya',
                'Level' => 'SPV',
                'Jabatan' => 'FA SPV',
                'Status' => 'AKTIF'

            ],
            [
                'NIK' => '2041720004',
                'Nama' => 'Sandy Wasiso',
                'JK' => 'L',
                'Alamat' => 'Perumahan Andara Blok G No 11, Jakarta Barat',
                'Level' => 'Staff',
                'Jabatan' => 'Manager',
                'Status' => 'AKTIF'

            ],
            [
                'NIK' => '2041720005',
                'Nama' => 'Andika Permana',
                'JK' => 'L',
                'Alamat' => 'Perumahan Puri Indah Blok B No 20, Mojokerto',
                'Level' => 'Staff',
                'Jabatan' => 'Adm',
                'Status' => 'AKTIF'

            ]
        ];
        DB::table('pegawais')->insert($data);
    }
}
