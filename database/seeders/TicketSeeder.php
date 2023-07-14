<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'name' => 'John Doe',
                'movie_title' => 'Fast X',
                'seat_number' => 'A1',
                'age' => 25,
                'seat_id' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'movie_title' => 'John Wick: Chapter 4',
                'seat_number' => 'B2',
                'age' => 30,
                'seat_id' => 2,
            ],
            [
                'name' => 'Michael Johnson',
                'movie_title' => 'Fast X',
                'seat_number' => 'C3',
                'age' => 35,
                'seat_id' => 3,
            ],
        ]);
    }
}
