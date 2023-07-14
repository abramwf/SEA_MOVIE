<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>{{ $balances[0]->money }}</h1>
    @foreach ($movies as $movie)
        <p>{{ $movie->title }} anda punya saldo {{ $movie->balance->money }}</p>

        @foreach ($movie->seats as $seat)
            <p>{{ $seat->id }} disewa:{{ $seat->pivot->ordered }} penyewa {{ $seat->movie_seats}}</p>
        @endforeach

    @endforeach
    @foreach ($movie_seats as $movie_seat)
        <style>
            /* p{{ $movie_seat }} {
                content: {{ $movie_seat }}; 
                color: red;
            } */
        </style>
        <p>{{ $movie_seat->ticket->name ?? "man" }} {{ $movie_seat->ticket->age ?? "umur" }} {{ $movie_seat->ticket->movie->title ?? "judul" }} {{ $movie_seat->seat_id ?? "nomor kursi" }}</p>
    @endforeach

    <h2>Kursi di movie</h2>
</body>
</html>