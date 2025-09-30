<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eskulList = [
            [
                'gambar' => './assets/image/EC.jpg' ,
                'judul' => 'English Club',
                'deskripsi' => 'Melatih kemampuan berbahasa Inggris melalui diskusi, debat, dan kegiatan interaktif lainnya.'
            ],
            [
                'gambar' => './assets/image/PD.jpg',
                'judul' => 'Perisai Diri',
                'deskripsi' => 'Ekstrakurikuler seni bela diri tradisional untuk melatih fisik dan mental sekaligus menjaga warisan budaya.'
            ]
        ];

         DB::table('eskuls')->insert($eskulList);
    }
}
