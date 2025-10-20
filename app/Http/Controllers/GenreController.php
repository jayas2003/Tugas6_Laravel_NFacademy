<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    // Menampilkan data berdasarkan ID (Show)
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre tidak ditemukan'], 404);
        }

        return response()->json($genre);
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre tidak ditemukan'], 404);
        }

        $genre->update($request->all());
        return response()->json(['message' => 'Data berhasil diperbarui', 'data' => $genre]);
    }

    // Menghapus data
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            
            return response()->json(['message' => 'Genre tidak ditemukan'], 404);
        }

        $genre->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
