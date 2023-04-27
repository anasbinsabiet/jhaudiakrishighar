<?php

namespace App\Http\Controllers\Auth;

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

     protected function credentials(Request $request)
     {
         return [
             'email' => $request->email,
             'password' => $request->password,
             'status' => 0,
         ];
     }

    public function authenticated()
    {
        if(auth()->user()->role == 1)
        {
            return redirect('/home');
        }else{
            return redirect('/home');
        }
        
    }
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        $login = request()->input('username');

        // if (is_numeric($login)) {
        //     $field = 'phone';
        // } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
        //     $field = 'email';
        // } else {
        //     $field = 'username';
        // }

        if (is_numeric($login)) {
            $field = 'mobile';
        } else {
            $field = 'email';
        }

        request()->merge([$field => $login]);

        return $field;
    }
}