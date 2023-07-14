<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Movie;
use App\Models\MovieSeat;
use App\Models\Seat;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TicketController extends Controller
{
    public function form($id)
    {
        $movies = Movie::find($id);
        $balances = Balance::all();
        $seats = Seat::all();
        $movie_seats = MovieSeat::all();

        return view('ticket_form', compact('movies', 'balances', 'seats', 'movie_seats'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);
        $movie = Movie::find($id);
        Ticket::create([
            'name' => $request->name,
            'age' => $request->age,
            'movie_id' => $movie->id,
            'movie_seat_id' => $request->movie_seat_id,
        ]);

        return redirect()->route('main');
    }

    public function ticket() {
        $movies = Movie::all();
        $balances = Balance::all();
        $seats = Seat::all();
        $tickets = Ticket::all();
        $movie_seats = MovieSeat::all();

        return view('ticket', compact('movies', 'balances', 'seats', 'tickets', 'movie_seats'));
    }

    public function history() {
        $movies = Movie::all();
        $balances = Balance::all();
        $seats = Seat::all();
        $tickets = Ticket::all();
        $movie_seats = MovieSeat::all();

        return view('history', compact('movies', 'balances', 'seats', 'tickets', 'movie_seats'));
    }

    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->route('main');
    }
    
}