<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function update(Request $request)
    {
     

    $this->validate(request(),[
        'name'                  => 'required',
        'username'              => 'required',
        'password'              => 'required_if:password,value|confirmed',
        'password_confirmation' => 'required_if:password,value',
    ]);

    if ($request->password != null) { 
        auth()->user()->update([
            'password'           => bcrypt(request('password')),
             'status'        => 1
        ]);
    }

    if (auth()->user()->isAdmin()) {
           $user = auth()->user()->update([

            'name'          => $request->name,
            'email'         => $request->email,
            'username'      => $request->username,
            'status'        => 1
            
        ]);

        return back()->with('info', 'Settings has been updated!');

    }

        return back()->with('info', 'Settings has been updated!');  
    }
}
