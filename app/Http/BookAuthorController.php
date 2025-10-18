<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    // Menampilkan semua buku dengan data penulisnya
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json($books);
    }

    // Menampilkan satu buku dengan nama penulisnya
    public function show($id)
    {
        $book = Book::with('author')->find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        return response()->json($book);
    }
}
