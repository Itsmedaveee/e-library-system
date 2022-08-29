<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ReportLog;
class PDFCollectionsController extends Controller
{
    public function index()
    {
         $reports = ReportLog::with(['user.student.department', 'book'])->get(); 
        $pdf        = \PDF::loadView('pdf.index', compact('reports'));

        $pdf->setPaper('legal','portrait'); 
        
        return $pdf->stream(); 
    }

    // public function viewPDF(Category $collect)
    // {
    //     $collect->load('books');
    //     $pdf        = \PDF::loadView('pdf.collections', [
    //         'collect'    => $collect,
    //     ]);
    //     $pdf->setPaper('legal','portrait'); 
    //     return $pdf->stream(); 
    // }
}
