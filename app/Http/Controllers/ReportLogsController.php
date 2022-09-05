<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReportLog;
class ReportLogsController extends Controller
{
    public function index()
    {
        $reports = ReportLog::with(['user.student.department', 'book'])->latest()->get(); 
        return view('reports-logs.index', compact('reports'));
    }
}
