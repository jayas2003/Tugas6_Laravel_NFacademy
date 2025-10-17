<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookAuthorController;

Route::get('/', function () {
    return view('welcome');
});

// route untuk menampilkan daftar buku dan author
Route::get('/books', [BookAuthorController::class, 'index']);
