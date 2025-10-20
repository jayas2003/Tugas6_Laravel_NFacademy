<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return response()->json(Author::with('books')->get());
    }

    public function show($id)
    {
        $author = Author::with('books')->find($id);
        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }
        return response()->json($author);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors',
        ]);

        $author = Author::create($validated);
        return response()->json($author, 201);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $author->update($request->all());
        return response()->json($author);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $author->delete();
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
