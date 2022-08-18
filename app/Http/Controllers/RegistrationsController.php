<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class RegistrationsController extends Controller
{
    public function index()
    {

        $departments = Department::pluck('name', 'id');
        return view('registrations.index', compact('departments'));
    }
}
