<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return response()->json([
            'success' => true,
            'status'  => 200,
            'data'    => $books
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'deskripsi' => 'required|string',
        ]);

        $books = Book::create($validated);

        return response()->json([
            'success' => true,
            'status'  => 200,
            'data'    => $books
        ]);
    }

    public function show($id)
    {
        $books = Book::findOrFail($id);

        return response()->json([
            'success' => true,
            'status'  => 200,
            'data'    => $books
        ]);
    }
    public function update(Request $request, $id)
    {
        $books = Book::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'deskripsi' => 'required|string',
        ]);

        $books->update($validated);

        return response()->json([
            'success' => true,
            'status'  => 200,
            'data'    => $books
        ]);
    }
    public function delete($id)
    {
        $books = Book::findOrFail($id);

        $books->delete();

        return response()->json([
            'success' => true,
            'status'  => 200,
            'message' => 'Book deleted successfully.',
        ]);
    }
}
