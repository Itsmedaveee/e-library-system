<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

   public function username()
    {
        return 'username';
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);
        $username = $request->get($this->username());
        $user = User::where($this->username(), $username)->first();
        if ($user && $user->approved === 0) {
            return $this->sendFailedLoginResponse($request, 'auth.status');
        }

        elseif ($user && $user->status === 0) {
            return $this->sendFailedLoginResponse($request, 'auth.status');
        }
        return $this->sendFailedLoginResponse($request);
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['status'] = 1;
        $credentials['status'] = 1; 
        return $credentials;
    }

   protected function sendFailedLoginResponse(Request $request, $trans = 'auth.status')
    {
        throw ValidationException::withMessages([
            $this->username() => [trans($trans)],
        ]);
    }


      protected function authenticated(Request $request, $user)
     {
        if ($user->isAdmin()) {
            return redirect('/home');
        }
        if ($user->isFaculty()) {
            return redirect('/faculty/home');
        }
        if ($user->isStudent()) {
            return redirect('/student/home');
        }
     }
}
