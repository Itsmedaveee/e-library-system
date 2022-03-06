<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Role;
class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'id_number' => request('id_number'),
            'name' => request('name'),
            'gender' => request('gender'),
            'section' => request('section'),
            'email' => request('email'),
            'year_level' => request('year_level'),
        ]);

        $role = Role::where('name', 'Student')->first();
        $user = User::create([
            'username'  => request('id_number'),
            'name'  => request('name'),
            'email'  => $student->email,
            'password'  => bcrypt(request('email'))
        ]);

        $student->user()->associate($user)->save();
        $user->role()->associate($role)->save();
        return back()->with('success', 'Student has been register!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
}
