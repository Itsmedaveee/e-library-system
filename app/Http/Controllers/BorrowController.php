<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\inventory;
use App\ReportLog;
class BorrowController extends Controller
{

    //BOOK LISTS BORROW STUDENTS
    public function index()
    {
        $inventories = Inventory::where('status', 'Borrowed')
                                ->orWhere('status', 'Overdue')
                                ->orWhere('status', 'Damaged Book')
                                ->orWhere('status', 'Lost Book')
                                ->orWhere('status', 'Extend') 
                                ->get();
        return view('borrows.borrow-lists', compact('inventories'));
    }

    // Manage for Return the book borrowed
    public function manage(Inventory $inventory)
    {
        return view('borrows.manage-book-return', compact('inventory'));
    }


    //STUDENT BORROW THE BOOK
    public function update(Request $request, Book $book)
    {

       $inventory = Inventory::where('status', 'Available')
                              ->where('book_id', $book->id)
                              ->first(); 

            if (! $inventory) {
                return back()->with([
                    'error' => 'No books Available!',
                ]);
            }

           $inventory->update([
                    'user_id'   => auth()->id(),
                    'status'    => 'Reserved'
            ]); 
           
           $reportLog = ReportLog::create([
                'user_id'  => auth()->id(),
                'book_id'  => $book->id,
                'status'  => 'Reserved',
           ]);

         return redirect('/student/home')->with('info', 'Book has been request borrowed!');
    }   
}
