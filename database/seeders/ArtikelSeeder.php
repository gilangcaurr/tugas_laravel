<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder; 

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert([
            'judul' => 'Elektronik',
            'foto' => 'https: //informa.co.id/files/uploads/inspirationarticle/thumb_image/2022/Feb/25/62184259a3bd1/cover-artikel-43-770x770.jpg',
            'kategori' => 'Teknologi',
            'konten' => 'Produk tersebut adalah commercial Smart TV dan CreateBoard (papan tulis digital)',
            'penulis' => 'Hasan Al Nawawi'
        ]);
        Artikel::insert([
            'judul' => 'Kemeja Kekinian',
            'foto' => 'https://s0.bukalapak.com/bukalapak-kontenz-production/content_attachments/63335/original/fashion_pria_korea_5.jpg',
            'kategori' => 'Fashion',
            'konten' => 'Tren fashion pria Korea Selatan berkembang sangat pesat. Hal tersebut lantas berkaitan kuat dengan adanya tokoh-tokoh terkenal di dalam sebuah drama populer.',
            'penulis' => 'Abdul fikar'
        ]);
        Artikel::insert([
            'judul' => 'Suap',
            'foto' => 'https://babel.bawaslu.go.id/wp-content/uploads/2019/12/POLITIK-UANG.jpg',
            'kategori' => 'Politik',
            'konten' => 'Kasus ini menyeret beberapa tokoh yang terlibat dalam hal tersebut',
            'penulis' => 'Ana Shabna'

        ]);

    }
}
