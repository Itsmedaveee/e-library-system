<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\ReportLog;
class ReturnBooksController extends Controller
{
    public function return(Inventory $inventory)
    {
        $inventory->update([
            'status'    => 'Return'
        ]);

         $reportLog = ReportLog::create([
                'user_id'  => $inventory->user_id,
                'book_id'  => $inventory->book_id,
                'status'  => $inventory->status,
           ]);

        return redirect('/borrows')->with('success', 'Book has been returned!');
    }
}
