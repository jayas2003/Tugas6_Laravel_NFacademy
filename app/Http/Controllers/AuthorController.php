<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::with('author')->get());
    }

    public function show($id)
    {
        $book = Book::with('author')->find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'author_id' => 'required|exists:authors,id',
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->update($request->all());
        return response()->json($book);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }
}
