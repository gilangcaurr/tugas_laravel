<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Media A',
            'url_media' => "https://www.youtube.com/embed/5uUPCp5ZSeE?si=Mf5gyAQCJk0tEntG",
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Media B',
            'url_media' => 'https://s.kaskus.id/images/2020/10/12/10942633_20201012050406.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Media C',
            'url_media' => "https://www.youtube.com/embed/5uUPCp5ZSeE?si=Mf5gyAQCJk0tEntG",

        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Media D',
            'url_media' => 'https://tse1.mm.bing.net/th?id=OIP.6_iAsPBW22mZVWiyMOa7ygHaEK&pid=Api&P=0&h=180',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Media E',
            'url_media' => 'https://www.youtube.com/watch?v=cdcvOj-3aZc',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Media F',
            'url_media' => 'https://www.youtube.com/watch?v=hTd1AGxcX0g',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Media G',
            'url_media' => 'https://www.youtube.com/watch?v=qAxZBGOLXrM',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 2,
            'media_title' => 'Media H',
            'url_media' => 'https://www.youtube.com/watch?v=z8gPsS3wZ4M',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Media I',
            'url_media' => 'https://www.youtube.com/watch?v=Vu4SH7cT7FM',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Media J',
            'url_media' => 'https://www.youtube.com/watch?v=8z3Q9jKw0k0',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Media K',
            'url_media' => 'https://www.youtube.com/watch?v=ilJUMJckrRI',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Media L',
            'url_media' => 'https://www.youtube.com/watch?v=B2PQnAu0li4',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 2,
            'media_title' => 'Media M',
            'url_media' => 'https://www.youtube.com/watch?v=QJ45at-X9ls',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Media N',
            'url_media' => 'https://www.youtube.com/watch?v=qLXtFHK3stc',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Media O',
            'url_media' => 'https://www.youtube.com/watch?v=K7ExWSnQdFU',
        ]);

    }
}
