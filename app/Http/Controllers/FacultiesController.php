<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Faculty;
use App\User;
use App\Role;
class FacultiesController extends Controller
{
    public function index()
    {
        $departments = Department::pluck('name', 'id');
        $faculties = User::where('role_id', 3)->get();
        return view('faculty-users.index', compact('departments', 'faculties'));
    }

    public function store(Request $request)
    {
       $department = Department::find(request('department'));
       $facultyName = $request->name;
       $faculty =  Faculty::create([
            'id_number'  => request('id_number'),
            'name'       => $facultyName,
            'gender'  => request('gender'),
        ]);

       $role = Role::where('name', 'Faculty')->first();

       $user = User::create([
            'username'  => request('username'),
            'name'  => $facultyName,
            'email'  => request('email'),
            'password'  => bcrypt(request('password')),
       ]);

       $faculty->department()->associate($department)->save();
       $user->role()->associate($role)->save();
       $user->department()->associate($department)->save();
       $user->faculty()->associate($faculty)->save();
       return back()->with('success' , 'Faculty has been added!');
    }

    public function edit(User $user) 
    {
        $departments = Department::pluck('name', 'id');
        return view('faculty-users.edit', compact('user', 'departments'));
    }

    public function update(Request $request, User $user)
    {

        $this->validate(request(),[
            'name'                      => 'required',
            'username'                      => 'required',
            'email'                    => 'required',
            'password'                  => 'required_if:password,value',
        ]);
        if ($request->password != null) {
            $user->update([
                'password'     => bcrypt(request('password')),
            ]);
        }

      $department = Department::find(request('department'));
      $faculty = Faculty::first();
       $facultyName = $request->name;
       $faculty->update([
            'id_number'  => request('id_number'),
            'name'       => $facultyName,
            'gender'  => request('gender'),
        ]);

       $role = Role::where('name', 'Faculty')->first();

       $user->update([
            'username'  => request('username'),
            'name'  => $facultyName,
            'email'  => request('email'),
       ]);

       $faculty->department()->associate($department)->save();
       $user->role()->associate($role)->save();
       $user->department()->associate($department)->save();
       $user->faculty()->associate($faculty)->save();
       return redirect('/faculty-users')->with('success' , 'Faculty has been added!');
    }
    public function destroy(User $user)
    {
        $faculty = Faculty::first();
        $user->delete();
        $faculty->delete();
        return back()->with('error', 'User has been remove!');
    }
}
