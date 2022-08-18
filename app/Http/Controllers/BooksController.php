<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use App\Inventory;
class BooksController extends Controller
{
    public function index()
    {
        $categories = Category::pluck('title', 'id');
        $books = Book::with('category', 'inventories')->withCount(['inventories' => function ($q) {
            $q->where('status', 'Available')->orWhere('status', 'Return');
        }])->get();
        return view('books.index', compact('categories', 'books'));
    }

    public function store(Request $request)
    {
       $this->validate(request(), [
            'title' => 'required',
            'author' => 'required',
            'published' => 'required',
            'serial_no' => 'required',
            'category' => 'required',
         
       ]);  
       // $image = $request->upload_photo;
       //  if (request()->hasFile('upload_photo')) {
       //      $file      = $request->file('upload_photo');
       //      $extension = $file->extension();
       //      $filename  = time() . '-' . str_slug($image) . '.' . $extension;
       //      $uploadImage      = $file->storeAs('public/avatar',$filename);
       //  }
 
        $category = Category::find(request('category'));
        $book = Book::create([
            'title' => request('title'),
            'author'  => request('author'), 
            'published' =>  request('published')
        ]);
  
        foreach ($request->serial_no as $serial) {
            $book->inventories()->create([ 
                'serial_no' => $serial,
            ]);
        }
    
        $book->category()->associate($category)->save();
        return back()->with('success', 'Book has been added!');
    }

    public function edit(Book $book)
    {
        $categories = Category::pluck('title', 'id');     
        $inventory  = Inventory::pluck('serial_no');    
        $inventory = collect(['serial_no' => $inventory]);   
        return view('books.edit', compact('book', 'categories', 'inventory'));
    }

    public function update(Book $book, Request $request)
    {

         $this->validate(request(), [
            'title' => 'required',
            'author' => 'required',
       ]);  
 
  
        $category = Category::find(request('category')); 
        $book->update([
            'title' => request('title'),
            'author'  => request('author'),
            'published'  => request('published'), 
        ]);
 
        
        $book->category()->associate($category)->save();
        return redirect('/books')->with('info', 'Book has been update!');
    }

    public function show(Book $book)
    {
        $book->load('category')->loadCount('inventories'); 
        return view('books.show', compact('book'));
    }

    public function remove(Book $book)
    {
        $book->delete();

        return back()->with('error', 'Book has been remove!');
    }

    public function downloadBook(Book $book)
    {
        $path = storage_path('app/'.$book->upload_file);

        return response()->download($path);
    }
}
