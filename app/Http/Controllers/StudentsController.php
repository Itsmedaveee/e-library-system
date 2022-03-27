<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Role; 
use App\Mail\SendingMail;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id_number' => 'required',  
            'name' => 'required',  
            'gender' => 'required',  
            'section' => 'required',  
            'email' => 'required|email|unique:users',
            'year_level'    => 'required',   
        ]); 
        $student = request('email');
        $student = Student::create([
            'id_number' => request('id_number'),
            'name' => request('name'),
            'gender' => request('gender'),
            'section' => request('section'),
            'email' => $student,
            'year_level' => request('year_level'),
        ]);

        $role = Role::where('name', 'Student')->first();
        $user = User::create([
            'username'  => request('id_number'),
            'name'  => request('name'),
            'email'  => $student->email,
            'username'  => request('username'),
            'password'  => bcrypt(request('password'))
        ]);

        $student->user()->associate($user)->save();
        $user->role()->associate($role)->save();
        Mail::to($student)->send(new SendingMail($student));
        return back()->with('success', 'Student has been register!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Student $student)
    {
         $student->update([
            'id_number' => request('id_number'),
            'name' => request('name'),
            'gender' => request('gender'),
            'section' => request('section'),
            'email' => request('email'),
            'year_level' => request('year_level'),
        ]);

        $role = Role::where('name', 'Student')->first();
        $user = User::first();
        $user->update([
            'username'  => request('id_number'),
            'name'  => request('name'),
            'email'  => $student->email,
            'password'  => bcrypt(request('email'))
        ]);

        $student->user()->associate($user)->save();
        $user->role()->associate($role)->save();
        return redirect('/students')->with('info', 'Student has been updated!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}
