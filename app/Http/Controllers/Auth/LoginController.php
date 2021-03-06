<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo;

    protected function authenticated(Request $request, $user)
    {
        switch (Auth::user()->role) {
            case 1:
                $this->redirectTo = '/admin';
                return redirect('/admin');;
                break;
            case 2:
                $this->redirectTo = '/manager';
                return redirect('/manager');
                break;
            case 3:
                $this->redirectTo = '/customer';
                return redirect('/home');
                break;
            default:
                $this->redirectTo = '/login';
                return redirect('/login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
