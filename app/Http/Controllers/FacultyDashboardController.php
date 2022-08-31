<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
class FacultyDashboardController extends Controller
{
    public function index(Request $request)
    { 
        // $categories = Category::all();
        $books = Book::with('category', 'inventories')->withCount(['inventories' => function ($q) {
            $q->where('status', 'Available')->orWhere('status', 'Return');
        }])->get();
        return view('faculty-dashboard.index', compact('books'));
    }

    public function show(Book $book, Request $request)
    {
         //Get the search value from the request
        $search = $request->input('search');
        $book->load(['books.inventories','books' => function ($q) use ($search) {
            $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('body', 'LIKE', "%{$search}%")
                    ->latest()
                    ->get(); 
        }]);  


        return view('faculty-dashboard.books.show', compact('book'));
    }

}
