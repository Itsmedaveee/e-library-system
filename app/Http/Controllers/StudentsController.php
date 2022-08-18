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
        $students = Student::where('status', 1)->with('department', 'user')->get();
     
        $departments = Department::pluck('name', 'id');
        return view('students.index', compact('students', 'departments'));
    }

    public function pending()
    {
        $students = Student::where('status', 0)->with('department', 'user')->get();
     
        $departments = Department::pluck('name', 'id');
        return view('students.pending-students', compact('students', 'departments'));
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
        $student = Student::create([
            'id_number' => request('id_number'),
            'name' => request('name'),
            'gender' => request('gender'),
            'section' => request('section'),
            'email' => request('email'),
            'year_level' => request('year_level'),
             'status'    => 0    
        ]);

        $role = Role::where('name', 'Student')->first();
        $user = User::create([ 
            'student_id'    => $student->id,
            'name'  => request('name'),
            'email'  => $student->email,
            'username'  => request('username'),
            'password'  => bcrypt(request('password')),
            'status'    => 0    
        ]);

        $student->user()->associate($user)->save();
        $student->department()->associate($department)->save();
        $user->department()->associate($department)->save();
        $user->role()->associate($role)->save();
       // Mail::to($student)->send(new SendingMail($student));
        return back()->with('success', 'Student has been register!');
    }

    public function edit(Student $student)
    {
        $departments = Department::pluck('name', 'id');
        return view('students.edit', compact('student', 'departments'));
    }

    public function update(Student $student, Request $request)
    {

        $this->validate(request(), [
            'id_number' => 'required',  
            'name' => 'required',  
            'gender' => 'required',  
            'section' => 'required',  
            'year_level'    => 'required',   
           'password'      => 'required_if:password,value',
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
        if ($request->password != null) {
            $student->user->update([
                'password'     => bcrypt(request('password')),
            ]);
        }

       // $user = User::first();
        $student->user()->update([
            'username'  => request('username'),
            'name'  => request('name'),
            'email'  => request('email'), 
             'status'    => 1
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

    public function remove(Student $student)
    {
        $student->delete();
        return back()->with('error', 'Student has been removed!');
    }

    public function activate(User $user) 
    {
        $user->update(['status' => 1]);
        return back()->with('success', 'Activate User Success!');
    }

    public function deactivate(User $user)
    {
        $user->update(['status' => 0]);
        return back()->with('error', 'Deactivate User Success!');
    }

    public function manage(Student $student)
    {
        return view('students.manage', compact('student'));
    }

    public function approved(Student $student)
    {
        $student->update([
            'status'    => 1
        ]); 

        $student->user()->update([
            'status'  => 1
        ]); 

        return redirect('/pending-students')->with('info', 'Student has been approved');
    }

    public function declined(Student $student)
    {
        $student->delete();
        $student->user()->delete(); 

        return redirect('/students')->with('error', 'Student has been declined');
    }

}
