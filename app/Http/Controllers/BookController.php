<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Ambil semua data buku dan relasi author
        $books = Book::with('author')->get();

        // Tampilkan ke view
        return view('books.index', compact('books'));
    }
}
