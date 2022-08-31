<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Inventory;
use App\ReportLog;
use Carbon\Carbon;
class PendingBorrowsController extends Controller
{
    public function pending()
    {
        $inventories = Inventory::with('user.student.department',  'book')->where('status', 'Reserved')->get();
   
        return view('borrows.pending', compact('inventories'));
    }

    public function manage(Inventory $inventory)
    {
        $inventory->load('user');

        return view('borrows.manage', compact('inventory'));
    }    

    public function approved(Inventory $inventory)
    {
        $inventory->update([
            'date_duration' => Carbon::parse(request('date_duration')),
            'status'    => 'Borrowed'
        ]);

          $reportLog = ReportLog::create([
                'user_id'  => $inventory->user_id,
                'book_id'  => $inventory->book_id,
                'status'  => $inventory->status,
           ]);
        return redirect('/pending-borrows')->with('info', 'Request book has been Borrowed!');
    }

    public function cancel(Inventory $inventory)
    {
          $inventory->update([
            'status'    => 'Available'
        ]);

          $reportLog = ReportLog::create([
                'user_id'  => $inventory->user_id,
                'book_id'  => $inventory->book_id,
                'status'  =>  'Cancel'
           ]);

          return redirect('/pending-borrows')->with('error', 'Cancelled Book!');
    }
}
