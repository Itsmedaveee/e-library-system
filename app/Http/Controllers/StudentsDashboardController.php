<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use App\Inventory;
class StudentsDashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); 
        $books = Book::with('inventories')->withCount(['inventories' => function ($query) {
                    $query->where('status', 'Available');
        }])->where('title', 'LIKE', "%{$search}%")
                      ->orWhere('author', 'LIKE', "%{$search}%")
                      ->latest()
                      ->get(); 
        return view('student-dashboard.index', compact('books'));
    }

    public function show(Book $book)
    {
        $book->load(['inventories'  => function ($q) {
            $q->where('status', 'Available')->orWhere('status', 'Return');
        }]);

        return view('student-dashboard.show', compact('book'));
    }

    public function pendingRequest()
    {
        $inventories = Inventory::where('status', 'Borrowed')
                                ->orWhere('status', 'Overdue')
                                ->orWhere('status', 'Pending')
                                ->orWhere('status', 'Damaged Book')
                                ->orWhere('status', 'Lost Book')
                                ->orWhere('status', 'Extend') 
                                ->get();

       return view('student-dashboard.request-book', compact('inventories'));
    }

    public function cancel(Inventory $inventory)
    {
        $book = Book::first();

        $inventory->update([
            'status'    => 'Available',
        ]);

       $reportLog = \App\ReportLog::create([
                'user_id'  => auth()->id(), 
                'book_id'   => $book->id,
                'status'  => 'Cancelled',
           ]);

       return back()->with('error', 'Book has been cancelled');
    }
}
