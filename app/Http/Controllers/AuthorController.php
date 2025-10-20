<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read all data
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    // Create data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors'
        ]);

        $author = Author::create($validated);
        return response()->json([
            'message' => 'Author created successfully!',
            'data' => $author
        ], 201);
    }
}
