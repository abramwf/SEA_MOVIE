<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'id' => 1,
                'title' => 'Fast X',
                'description' => 'Dom Toretto dan keluarganya menjadi sasaran putra gembong narkoba Hernan Reyes yang pendendam.',
                'release_date' => '2023-05-17',
                'poster_url' => 'https://image.tmdb.org/t/p/w500/fiVW06jE7z9YnO4trhaMEdclSiC.jpg',
                'age_rating' => 15,
                'ticket_price' => 53000,
            ],
            [
                'id' => 2,
                'title' => 'John Wick: Chapter 4',
                'description' => 'John Wick mengungkap jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi kuat di seluruh dunia dan kekuatan yang mengubah teman lama menjadi musuh.',
                'release_date' => '2023-03-22',
                'poster_url' => 'https://image.tmdb.org/t/p/w500/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg',
                'age_rating' => 10,
                'ticket_price' => 60000,
            ],
        ];
        
        $balance_id = 1;
        
        foreach ($movies as $movie) {
            $movie['balance_id'] = $balance_id;
            DB::table('movies')->insert($movie);
        }
        
    }
}
