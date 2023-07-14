<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'movie_id',
        'movie_seat_id',
    ];

    public function movie_seat() {
        return $this->belongsTo(MovieSeat::class, 'movie_seat_id');
    }

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
