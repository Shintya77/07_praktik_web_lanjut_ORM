<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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
                'Nomor' => 'S001',
                'Nama' => 'PT Candi Muda',
                'Alamat' => 'Jl.Manggis No. 10 Semarang',
                'Telepon' => '(024) 630 3334'
            ],

            [
                'Nomor' => 'S002',
                'Nama' => 'CV Gemilang',
                'Alamat' => 'Jl.Nanas No. 54 Surakarta',
                'Telepon' => '(0271) 380 2900'
            ],

            [
                'Nomor' => 'S003',
                'Nama' => 'PT Honduras',
                'Alamat' => 'Jl.Salak No. 78 Yogyakarta',
                'Telepon' => '(0274) 630 1234'
            ],

            [
                'Nomor' => 'S004',
                'Nama' => 'PT Buah Segar',
                'Alamat' => 'Jl.Semangka No. 45 Solo',
                'Telepon' => '(0276) 380 6814'
            ]

            ];

            DB::table('suppliers')->insert($data);
    }
}
