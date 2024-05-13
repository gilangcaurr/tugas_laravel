<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailFilm;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1, 
            'code_film' => 'tt0773262', 
            'url_imdb' => 'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_i_2'
        ]); 
        DetailFilm::insert([
            'film_id' => 2, 
            'code_film' => 'tt0068646', 
            'url_imdb' => 'https://www.imdb.com/title/tt0068646/?ref_=hm_rvi_tt_i_2'
        ]); 
        DetailFilm::insert([
            'film_id' => 3, 
            'code_film' => 'tt1375666', 
            'url_imdb' => 'https://www.imdb.com/title/tt1375666/?ref_=tt_sims_tt_i_2'
        ]); 
    }
}
