<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
class SupLogController extends Controller
{
   
    public function __construct()
    {
    	//$this->middleware('guest')->except('logout');
        //$this->middleware('guest:adminn')->except('logout');
    	$this->middleware('guest:supervisor', ['except' => ['logout']]);
    }

    public function showLoginForm(){
        //dd("hello");
    	return view('auth.Supervisor-login');
    }

    public function login(Request $request)
    {  
        //dd($request->all());
       //validate the form

    	$this->validate($request,[
             'email'=>'required|email',
             'password'=>'required|min:6'
    	]);

    	/*Auth::attemp(['email'=> $request->email, 'password'=> $request->password], $request->remember);*/
    	if(Auth::guard('supervisor')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember))
    		{   
                
                Session::put('supervisorname', $request->email);
                 
                //dd(Session::get('username'));
                return redirect()->intended(route('supervisor.dashboard'));
    			//return redirect()->intended(route('admin.comdashboard'));
    		}

    		return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
        Auth::guard('supervisor')->logout();
        return redirect('/');
    }
}
