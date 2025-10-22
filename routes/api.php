<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

// Tes koneksi API
Route::get('/check', function () {
    return response()->json(['message' => 'API is working!']);
});

// 🟢 Route terbuka untuk semua (tanpa autentikasi)
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);

// 🔒 Route khusus admin (perlu login dan role:admin)
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    // Author
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{id}', [AuthorController::class, 'update']);
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);

    // Genre
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{id}', [GenreController::class, 'update']);
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']);
});

// (Optional) Book Routes — jika masih dipakai untuk testing
Route::apiResource('books', BookController::class);
