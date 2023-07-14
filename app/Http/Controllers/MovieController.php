<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Movie;
use App\Models\MovieSeat;
use App\Models\Seat;
use App\Models\Ticket;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function main() {
        $movies = Movie::all();
        $balances = Balance::all();
        $seats = Seat::all();
        $movie_seats = MovieSeat::all();
        $tickets = Ticket::all();

        return view('main', compact('movies', 'balances', 'seats', 'movie_seats', 'tickets'));
    }

   
}
