<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\ReportLog;
use Carbon\Carbon;
class ReturnBooksController extends Controller
{
    public function return(Inventory $inventory)
    {
        $inventory->update([
            'status'    => request('status'),
            'date_duration'    => Carbon::parse(request('date_duration'))
        ]);

         $reportLog = ReportLog::create([
                'user_id'  => $inventory->user_id,
                'book_id'  => $inventory->book_id,
                'status'  => $inventory->status,
           ]);

        return back()->with('success', "Book has been {$inventory->status}");
    }
}
