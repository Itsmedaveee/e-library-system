<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class LibrarianUsersController extends Controller
{
    public function index()
    {
        $librarianUsers = User::where('role_id', 2)->get();
        return view('librarian-users.index', compact('librarianUsers'));
    }

    public function store(Request $request)
    {
        $role = Role::where('name', 'Librarian')->first();
        $librarianUser = User::create([
            'name'  => request('name'),
            'email'  => request('email'),
            'password'  => bcrypt(request('password')),
        ]);
       $librarianUser->role()->associate($role)->save();
       return back()->with('success', 'Librarian User has been added!');
    }

    public function edit(User $librarianUser) 
    {
        return view('librarian-users.edit', compact('librarianUser'));
    }

    public function update(User $librarianUser, Request $request)
    {
         $this->validate(request(),[
            'name'                      => 'required',
            'email'                    => 'required',
            'password'                  => 'required_if:password,value',
        ]);
        if ($request->password != null) {
            $librarianUser->update([
                'password'     => bcrypt(request('password')),
            ]);
        }

        $role = Role::where('name', 'Administrator')->first();
        $librarianUser->update([
            'name'         => request('name'),
            'email'     => request('email')
        ]);

        $librarianUser->role()->associate($role)->save();
        return back()->with('info', 'Administrator has been updated!');
    }

    public function destroy(User $librarianUser)
    {
        $librarianUser->delete();
        return back()->with('error', 'Librarian User has been removed!');
    }
}
