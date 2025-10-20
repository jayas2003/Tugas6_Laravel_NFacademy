<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author tidak ditemukan'], 404);
        }

        return response()->json($author);
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:authors'
        ]);

        $author = Author::create($request->all());
        return response()->json($author, 201);
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author tidak ditemukan'], 404);
        }

        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:authors,email,' . $id,
        ]);

        $author->update($request->all());
        return response()->json(['message' => 'Data berhasil diperbarui', 'data' => $author]);
    }

    // Menghapus data
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author tidak ditemukan'], 404);
        }

        $author->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
