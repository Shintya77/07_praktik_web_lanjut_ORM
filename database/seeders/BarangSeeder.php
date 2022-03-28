<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
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
                'barang' => 'Strawbeery',
                'deskripsi' => 'strawberry fresh ciwidey ukuran mini/kecil kemasan 1kg',
                'gambar' => 'https://bit.ly/3qvLPWL',
                'harga' => 'Rp 30.000'
            ],
            [
                'barang' => 'Melon Madu',
                'deskripsi' => 'Melon Madu Segar Buah Melon Madu Melon Segar 1,5Kg s/d 2Kg Buah Melon',
                'gambar' => 'https://bit.ly/35ZliK4',
                'harga' => 'Rp 35.000'
            ],
            [
                'barang' => 'Jeruk Medan',
                'deskripsi' => 'Jeruk Medan Manis Super 1Kg',
                'gambar' => 'https://bit.ly/3q8hLQI',
                'harga' => 'Rp 20.000'
            ],
            [
                'barang' => 'Apel Fuji',
                'deskripsi' => 'Apel Fuji RRC, Berat : 450 - 500 Gr',
                'gambar' => 'https://bit.ly/3KKQOdF',
                'harga' => 'Rp 40.000'
            ],
            [
                'barang' => 'Semangka',
                'deskripsi' => 'Semangka merah 1 pcs (3.5 - 4 kg), Produk bervariasi di 3.5 - 4 kg (tergantung hasil panen) ',
                'gambar' => 'https://bit.ly/3wbdGyL',
                'harga' => 'Rp 50.000'
            ],
            [
                'barang' => 'Anggur',
                'deskripsi' => 'Anggur berwarna merah gelap keunguan ini memiliki rasa yang manis dan juicy, kaya akan air. Butiran buahnya bulat, padat dan sedikit besar',
                'gambar' => 'https://bit.ly/3tY4OtH',
                'harga' => 'Rp 60.000'
            ]
        ];
        DB::table('barangs')->insert($data);
    }
}
