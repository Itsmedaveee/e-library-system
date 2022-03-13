<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        Category::create([
            'title' => request('title')
        ]);

        return back()->with('success', 'Category has been added!');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $category->update([
            'title' => request('title'),
        ]);

        return redirect('/categories')->with('info', 'Category has been updated!');
    }

    public function show(Category $category)
    {
        $category->load('books');
        return view('categories.show', compact('category'));
    }

    public function destroy(Category $category) 
    {
        $category->delete();

        return back()->witH('error', 'Category has been remove!');
    }
}
