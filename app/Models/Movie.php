<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function balance() {
        return $this->belongsTo(Balance::class);
    }

    public function seats() {
        return $this->belongsToMany(Seat::class, 'movie_seats')->withPivot('ordered')->withTimestamps();
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
