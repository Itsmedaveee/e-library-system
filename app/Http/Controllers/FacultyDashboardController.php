<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
class FacultyDashboardController extends Controller
{
    public function index(Request $request)
    { 
        $categories = Category::all();
        return view('faculty-dashboard.index', compact('categories'));
    }

    public function show(Category $category, Request $request)
    {
         //Get the search value from the request
        $search = $request->input('search');
        $category->load(['books' => function ($q) use ($search) {
            $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('body', 'LIKE', "%{$search}%")
                    ->latest()
                    ->get(); 
        }]); 

        return view('faculty-dashboard.books.show', compact('category'));
    }

}
