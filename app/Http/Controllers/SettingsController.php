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
        // $this->validate(request(),[

        //     'email'                 => 'required',
        //     'username'              => 'required', 
            

        // ]);



        if ($request->password != null) { 
            auth()->user()->update([
                'password'           => bcrypt(request('password'))

            ]);
        }

    if (auth()->user()->isAdmin()) {
           $user = auth()->user()->update([

            'name'          => $request->name,
            'email'         => $request->email,
            'username'      => $request->username,
            
        ]);

        return back()->with('info', 'Settings has been updated!');

    }

        return back()->with('info', 'Settings has been updated!');  
    }
}
