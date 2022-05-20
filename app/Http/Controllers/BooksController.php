<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
class BooksController extends Controller
{
    public function index()
    {
        $categories = Category::pluck('title', 'id');
        $books = Book::with('category')->get();
        return view('books.index', compact('categories', 'books'));
    }

    public function store(Request $request)
    {
       $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'category' => 'required',
            'upload_photo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'upload_file' => 'required|file|mimes:csv,pdf',
       ]);  
       $image = $request->upload_photo;
        if (request()->hasFile('upload_photo')) {
            $file      = $request->file('upload_photo');
            $extension = $file->extension();
            $filename  = time() . '-' . str_slug($image) . '.' . $extension;
            $uploadImage      = $file->storeAs('public/avatar',$filename);
        }

      $pdf = $request->upload_file;
        if (request()->hasFile('upload_file')) {
            $file      = $request->file('upload_file');
            $extension = $file->extension();
            $filename  = time() . '-' . str_slug($pdf) . '.' . $extension;
            $uploadFile      = $file->storeAs('public/avatar',$filename);
        }


        $category = Category::find(request('category'));

        $books = Book::create([
            'title' => request('title'),
            'body'  => request('body'),
            'author'  => request('author'),
            'upload_photo' => $uploadImage,
            'upload_file' => $uploadFile,
            'published' =>  request('published')
        ]);

        $books->category()->associate($category)->save();
        return back()->with('success', 'Book has been added!');
    }

    public function edit(Book $book)
    {
        $categories = Category::pluck('title', 'id');
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Book $book, Request $request)
    {

         $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'category' => 'required',
            'upload_photo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'upload_file' => 'required|file|mimes:csv,pdf',
       ]);  
 
       $image = $request->upload_photo;
        if (request()->hasFile('upload_photo')) {
            $file      = $request->file('upload_photo');
            $extension = $file->extension();
            $filename  = time() . '-' . str_slug($image) . '.' . $extension;
            $uploadImage      = $file->storeAs('public/avatar',$filename);
        }

      $pdf = $request->upload_file;
        if (request()->hasFile('upload_file')) {
            $file      = $request->file('upload_file');
            $extension = $file->extension();
            $filename  = time() . '-' . str_slug($pdf) . '.' . $extension;
            $uploadFile      = $file->storeAs('public/avatar',$filename);
        }


        $category = Category::find(request('category'));

        $book->update([
            'title' => request('title'),
            'body' => request('body'),
            'author'  => request('author'),
            'published'  => request('published'),
            'upload_photo' => $uploadImage,
            'upload_file' => $uploadFile,
        ]);

        $book->category()->associate($category)->save();
        return redirect('/books')->with('info', 'Book has been update!');
    }

    public function show(Book $book)
    {
        $book->load('category');
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
