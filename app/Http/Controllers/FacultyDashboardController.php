<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class FacultyDashboardController extends Controller
{
    public function index(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');
        $books = Book::query()
                    ->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('body', 'LIKE', "%{$search}%")
                    ->get(); 
        return view('faculty-dashboard.index', compact('books'));
    }

}
