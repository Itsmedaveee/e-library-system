<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Role; 
use App\Department; 
use App\Mail\SendingMail;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::with('department')->get();
        $departments = Department::pluck('name', 'id');
        return view('students.index', compact('students', 'departments'));
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

        $department = Department::find(request('department'));
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
        $student->department()->associate($department)->save();
        $user->role()->associate($role)->save();
        Mail::to($student)->send(new SendingMail($student));
        return back()->with('success', 'Student has been register!');
    }

    public function edit(Student $student)
    {
        $departments = Department::pluck('name', 'id');
        return view('students.edit', compact('student', 'departments'));
    }

    public function update(Student $student)
    {

        $this->validate(request(), [
            'id_number' => 'required',  
            'name' => 'required',  
            'gender' => 'required',  
            'section' => 'required',  
            'year_level'    => 'required',   
        ]); 
            
         $student->update([
            'id_number' => request('id_number'),
            'name' => request('name'),
            'gender' => request('gender'),
            'section' => request('section'),
            'email' => request('email'),
            'year_level' => request('year_level'),
        ]);

        $department = Department::find(request('department'));
        $role = Role::where('name', 'Student')->first();
       // $user = User::first();
        $student->user()->update([
            'username'  => request('id_number'),
            'name'  => request('name'),
            'email'  => $student->email,
            'password'  => bcrypt(request('email'))
        ]);

        //$student->user()->associate($user)->save();
        $student->department()->associate($department)->save();
       // $user->role()->associate($role)->save();
        return redirect('/students')->with('info', 'Student has been updated!');
    }

    public function show(Student $student)
    {
        $student->load('department');
        return view('students.show', compact('student'));
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('error', 'Student has been removed!');
    }
}
