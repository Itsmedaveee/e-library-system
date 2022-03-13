<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', 1)->get();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'username'  => 'required',
            'name'      => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required'
        ]);
       $role = Role::where('name', 'Administrator')->first();
       $user =  User::create([
            'name'  => request('name'),
            'username'  => request('username'),
            'email'  => request('email'),
            'password'  => bcrypt(request('password')),
        ]);
       $user->role()->associate($role)->save();

       return back()->with('success', 'User has been added!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
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

        $role = Role::where('name', 'Administrator')->first();
        $user->update([
            'name'         => request('name'),
            'username'         => request('username'),
            'email'     => request('email')
        ]);

        $user->role()->associate($role)->save();
        return redirect('/users')->with('info', 'Administrator has been updated!');
    }

    public function destroy(User $user) 
    {
        $user->delete();
        return back()->with('error', 'User has been removed!');
    }
}
