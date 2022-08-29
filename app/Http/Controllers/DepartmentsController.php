<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'  => 'required'
        ]); 
        Department::create([
            'name'  => request('name')
        ]);

        return back()->with('success', 'Department has been added!');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $department->update([
            'name'  => request('name')
        ]);

        return redirect('/departments')->with('info', 'Department has been update!');
    }

    public function show(Department $department)
    {
        $department->load('courses');
        return view('departments.show', compact('department'));
    }

    public function remove(Department $department)
    {
        $department->delete();
        return back()->with('error', 'Department has been remove!');
    }
}
