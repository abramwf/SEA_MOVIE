<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                                    <input class="fw-bold" type="number" name="money" placeholder="Rp.">
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
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Histori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Tiket Anda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>
