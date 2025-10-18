<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Halaman utama menampilkan daftar buku
Route::get('/', [BookController::class, 'index']);
