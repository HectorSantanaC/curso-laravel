<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ApiController extends Controller
{
  public function index()
  {
    $books = Book::with('author')->get();
    return response()->json($books);
  }

  public function store(Request $request)
  {
    try {
      $request->validate([
        'title' => 'required|string',
        'author_id' => 'required|integer',
        'published_year' => 'required|integer'
      ]);

      $book = new Book();

      $book->title = $request->input('title');
      $book->author_id = $request->input('author_id');
      $book->published_year = $request->input('published_year');

      $book->save();

      return response()->json($book, 201);
    } catch (\Exception $e) {
      return response()->json(['error' => 'Error al crear el libro'], 500);
    }
  }

  public function destroy($id)
  {
    $book = Book::find($id);

    if (!$book) {
      return response()->json(['message' => 'Libro no encontrado'], 404);
    } else {
      $book->delete();
      return response()->json(['message' => 'Libro eliminado correctamente'], 200);
    }
  }
}
