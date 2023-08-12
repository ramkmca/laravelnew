<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\facades\Auth;
//use Auth;

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
    //protected $redirectTo = '/dashboard';
    protected function redirectTo(){
        //dd(Auth::user()->role);
        if(Auth::user()->emptype=='grievance supervisor') {
           Auth::guard('web')->logout();
        //return redirect('/login');
        }elseif(Auth::user()->emptype=='DTO' || Auth::user()->emptype=='STO' || Auth::user()->emptype=='RTO' || Auth::user()->emptype=='National'){
        if (Auth::user()->role == "admin") {
            return 'dashboard';
        }
        else{
            return 'home';
        }
    }
     Auth::guard('web')->logout();
    } 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('userlogout');
    }
    public function userlogout(){
        Auth::guard('web')->logout();
        return redirect('/login');
    }
}
