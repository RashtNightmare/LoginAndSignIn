<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    public function ShowLoginForm(){
      return view('Auth.teacher-login');
    }
    public function Login(Request $request){
      //Validate   
       $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required|min:6',
       ]); 
      
       if(Auth::guard('web')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
         return redirect()->intended(route('admin.dashboard'));
       }

       return redirect(back())->withInput($request->only('email','remember'));
    }
}
