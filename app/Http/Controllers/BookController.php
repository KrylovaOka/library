<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Book;
use \App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('authors')->get();
        $authors = Author::get();
        
        return view('books.index', [
            'books' => $books,
            'authors' => $authors
        ]);

    }

}
