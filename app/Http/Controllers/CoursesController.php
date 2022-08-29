<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Course;
class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $departments = Department::pluck('name', 'id');
        return view('courses.index', compact('courses', 'departments'));
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'department'  => 'required',
            'code'  => 'required',
            'name'  => 'required'
        ]);

        $department = Department::find(request('department'));
        $course = Course::create([
            'code'  => request('code'),
            'name'  => request('name')
        ]);

        $course->department()->associate($department)->save();

        return back()->with('success', 'Course has been added!');
    }

    public function edit(Course $course)
    {
        $departments = Department::pluck('name', 'id');
        return view('courses.edit', compact('course', 'departments'));
    }

    public function update(Course $course)
    {
          $this->validate(request(), [
            'code'  => 'required',
            'name'  => 'required'
        ]);

        $department = Department::find(request('department'));
        $course->update([
            'code'  => request('code'),
            'name'  => request('name')
        ]);

        $course->department()->associate($department)->save();

        return redirect('/courses')->with('info', 'Course has been updated!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('error', 'Course has been remove!');
    }
}
