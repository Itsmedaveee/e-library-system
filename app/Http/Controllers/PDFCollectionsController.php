<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class PDFCollectionsController extends Controller
{
    public function index()
    {
        $collections = Category::withCount('books')->get();
        $pdf        = \PDF::loadView('pdf.index', [
            'collections'    => $collections,
        ]);

        $pdf->setPaper('legal','portrait'); 
        
        return $pdf->stream(); 
    }

    public function viewPDF(Category $collect)
    {
        $collect->load('books');
        $pdf        = \PDF::loadView('pdf.collections', [
            'collect'    => $collect,
        ]);
        $pdf->setPaper('legal','portrait'); 
        return $pdf->stream(); 
    }
}
