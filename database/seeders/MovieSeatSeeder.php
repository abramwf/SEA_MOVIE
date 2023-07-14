<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = Movie::all();
        $seats = Seat::all();

        foreach ($movies as $movie) {
            foreach ($seats as $seat) {
                $movie->seats()->attach($seat, ['ordered' => false]);
            }
        }
    }
}
