<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
class CollectionsController extends Controller
{
    public function index()
    {
        $collections = Category::withCount('books')->get();
        return view('collections.index', compact('collections'));
    }
}
