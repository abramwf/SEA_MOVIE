<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MovieController::class, 'main'])->name('main');

Route::get('/home', [MovieController::class, 'main'])->name('main');

Route::post('/balance', [BalanceController::class, 'update'])->name('balance.update');

Route::get('/ticket_form/{id}', [TicketController::class, 'form'])->name('ticket_form');

Route::post('/ticket_form/{id}', [TicketController::class, 'store'])->name('store');

Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');

Route::delete('/ticket/destroy/{id}', [TicketController::class, 'destroy'])->name('destroy');

Route::get('/history', [TicketController::class, 'history'])->name('history');