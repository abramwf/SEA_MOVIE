<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Form</title>
    <link rel="stylesheet" href="{{ asset('css/seat.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/env.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary p-0 m-0 g-0">
        <div class="container-fluid d-flex flex-column p-0 m-0 g-0">
            <div class="nav-info d-flex align-items-center justify-content-between col-12 p-3 g-0 m-0">
                <img class="navbar-brand mx-sm-4 mx-1" src="{{ asset('img/logo.png') }}" alt="">
                <div
                    class="saldo-container mx-sm-4 mx-1 d-flex align-items-end align-items-sm-center flex-sm-row flex-column">
                    <p class="nav-link fw-bold mx-sm-3 p-0 g-0 my-0">Saldo Rp. {{ $balances[0]->money }}</p>
                    <button type="button" class="btn btn-warning p-1 fw-bold" data-toggle="modal"
                        data-target="#staticBackdrop">Top up</button>
                    <div div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog saldo" role="document">
                            <form class="modal-content" action="{{ route('balance.update') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Top Up</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input class="fw-bold border-0" type="number" name="money" placeholder="Rp.">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning fw-bold">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-select col-12 p-1 m-0 g-0">
                <ul class="navbar-nav gap-3 d-flex flex-row mx-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('history') }}">Histori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('ticket') }}">Tiket Anda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container main radius-5">
        <div class="card border-0 mx-lg-5">
            <img src="{{ $movies->poster_url }}" class="card-img" alt="{{ $movies->title }}">
            <div class="card-img-overlay px-4">
                <h2 class="card-title">{{ $movies->title }}</h2>
                <p class="card-text">Rating : {{ $movies->age_rating }}</p>
                <div class="price p-1 rounded">
                    <p class="card-text fw-bold text-dark">Rp.{{ $movies->ticket_price }}</p>
                </div>
            </div>
        </div>
        <form action="{{ route('store', $movies->id) }}" method="POST" class="ticket py-4 px-sm-5 px-3 mx-lg-5">
            @csrf
            <div class="identity d-md-flex gap-sm-3 gap-0 ">
                <div class="mb-3 ticket-identity flex-md-grow-1">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3 ticket-identity flex-md-grow-1">
                    <label for="age" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="age" name="age">
                </div>
                <div class="mb-3 ticket-identity flex-md-grow-1 d-none">

                    <input type="number" class="form-control" id="movie_id" name="movie_id"
                        value="{{ $movies->id }}">
                </div>
                <div class="mb-3 ticket-identity flex-md-grow-1 d-none">

                    <input type="number" class="form-control" id="movie_seat_id" name="movie_seat_id"
                        value="{{ $movies->id }}">
                </div>
            </div>
            <button type="button" class="btn btn-primary col-12 next">Next</button>
            <div class="seat-container d-flex flex-column align-items-center d-none">
                <label for="seat" class="text-dark">Pilih Kursi</label>
                <div class="seat d-flex p-2 rounded-1 justify-content-center">
                    <div class="trapezoid"></div>
                    @foreach ($movies->seats as $seat)
                        <div class="seat-input">
                            <input class="form-check-input" type="checkbox" id="seat{{ $seat->pivot->id }}"
                                value="{{ $seat->pivot->id }}">
                            <span>{{ $seat->id }}</span>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary col-12">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('script/form.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}">
        < /> <
        script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
