<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritaList = [
            [
                'gambar' => 'https://newstasikmalaya.com/storage/kapolsek-cibeureum-berikan-penyuluhan.jpg',
                'waktu'=> '2024-10-07 14:27 WIB',
                'judul' => 'Sosialisai Larangan Knalpot Brong',
                'link' => 'https://tasikmalaya.inews.id/read/502735/polsek-cibeureum-sosialisasikan-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya'
            ],
            [
                'gambar' => 'https://newstasikmalaya.com/storage/kapolsek-cibeureum-berikan-penyuluhan.jpg',
                'waktu'=> '2024-10-07 14:27 WIB',
                'judul' => 'Sosialisai Larangan Knalpot Brong',
                'link' => 'https://tasikmalaya.inews.id/read/502735/polsek-cibeureum-sosialisasikan-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya'
            ],
            [
                'gambar' => 'https://newstasikmalaya.com/storage/kapolsek-cibeureum-berikan-penyuluhan.jpg',
                'waktu'=> '2024-10-07 14:27 WIB',
                'judul' => 'Sosialisai Larangan Knalpot Brong',
                'link' => 'https://tasikmalaya.inews.id/read/502735/polsek-cibeureum-sosialisasikan-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya'
            ]
        ];

        DB::table('beritas')->insert($beritaList);
    }
}
