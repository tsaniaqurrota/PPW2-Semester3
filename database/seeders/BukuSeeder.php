<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul' => 'Toko Kelontong Namiya',
            'penulis' => 'Keigo Higashino',
            'harga' => 98000,
            'tgl_terbit' => '2012-03-28',
        ]);

        Buku::create([
            'judul' => 'Malice',
            'penulis' => 'Keigo Higashino',
            'harga' => 90000,
            'tgl_terbit' => '2020-08-09',
        ]);


    }
}

