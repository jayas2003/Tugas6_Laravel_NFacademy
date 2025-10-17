<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return view('bookauthor.index', compact('books'));
    }
}

