<?php
namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read all data
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    // Create data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre = Genre::create($validated);
        return response()->json([
            'message' => 'Genre created successfully!',
            'data' => $genre
        ], 201);
    }
}
