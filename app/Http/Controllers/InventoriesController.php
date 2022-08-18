<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class InventoriesController extends Controller
{
    public function index()
    {
        $books = Book::pluck('title', 'id');
        return view('books.add-book', compact('books'));
    }

}
