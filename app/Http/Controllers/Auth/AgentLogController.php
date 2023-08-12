<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Model\Employee;

class AgentLogController extends Controller
{
   
    public function __construct()
    {
    	//$this->middleware('guest')->except('logout');
        //$this->middleware('guest:adminn')->except('logout');
    	$this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm(){
        //dd("hello");
    	return view('auth.Agent-login');
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
    	if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember))
    		{   
                
                //Session::put('agentname', $request->email);
                 
                //dd(Session::get('username'));
                //Employee::Where('email','=',$request->email)->update(['loginStatus' => 1]);
                return redirect()->intended(route('admin.dashboard'));
    			//return redirect()->intended(route('admin.comdashboard'));
    		}

    		return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
        //$empEmail=Session::get('agentname');
        //Employee::Where('email','=',$empEmail)->update(['loginStatus' => 0]);
        Auth::guard('admin')->logout();
        return redirect('/agent');
    }


}
