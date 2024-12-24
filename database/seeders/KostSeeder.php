<?php

namespace Database\Seeders;

use App\Models\Kost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kost::create([
            'nama' => 'Kost A',
            'deskripsi' => 'Kost nyaman dan strategis di pusat kota',
            'tipe' => 'Putra',
            'alamat' => 'Jl. Raya No.1, Surabaya',
            'status' => 'Tersedia',
            'harga' => 1500000,
            'stock' => 5,
            'image' => 'https://coder-telkomsby.com/assets/images/blog-dummy.png',
        ]);

        Kost::create([
            'nama' => 'Kost B',
            'deskripsi' => 'Kost khusus untuk wanita dengan fasilitas lengkap',
            'tipe' => 'Putri',
            'alamat' => 'Jl. Merdeka No.10, Surabaya',
            'status' => 'Penuh',
            'harga' => 2000000,
            'stock' => 0,
            'image' => 'https://coder-telkomsby.com/assets/images/blog-dummy.png',
        ]);

        Kost::create([
            'nama' => 'Kost C',
            'deskripsi' => 'Kost dengan harga terjangkau dan dekat dengan kampus',
            'tipe' => 'Campur',
            'alamat' => 'Jl. Kampus No.5, Surabaya',
            'status' => 'Tersedia',
            'harga' => 1200000,
            'stock' => 10,
            'image' => 'https://coder-telkomsby.com/assets/images/blog-dummy.png',
        ]);
    }
}
