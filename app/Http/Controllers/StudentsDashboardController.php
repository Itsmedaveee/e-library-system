<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
class StudentsDashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('student-dashboard.index', compact('categories'));
    }
}
