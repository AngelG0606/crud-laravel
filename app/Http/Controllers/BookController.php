<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // GET /api/books
    public function index()
    {
        return response()->json(Book::all(), 200);
    }

    // POST /api/books
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string',
            'isbn' => 'required|string|unique:books,isbn',
            'price' => 'required|numeric'
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    // GET /api/books/{id}
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book, 200);
    }

    // PUT/PATCH /api/books/{id}
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|string',
            'author' => 'sometimes|string',
            'description' => 'sometimes|string',
            'isbn' => 'sometimes|string|unique:books,isbn,' . $id,
            'price' => 'sometimes|numeric'
        ]);

        $book->update($validated);

        return response()->json($book, 200);
    }

    // DELETE /api/books/{id}
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json([
            'message' => 'Book deleted successfully'
        ], 200);
    }
}