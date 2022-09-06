<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Course;
class RegistrationsController extends Controller
{
    public function index()
    {

        $departments = Department::pluck('name', 'id');
        $courses = Course::pluck('code', 'id');
        return view('registrations.index', compact('departments', 'courses'));
    }
}
