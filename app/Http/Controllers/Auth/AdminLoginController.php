<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  public function __construct(){
    $this->middleware('guest:admin');
  }

  public function showLoginForm(){
    return view('auth.admin-login',['except' => ['logout']]);
  }

  public function login(Request $request){
    //Validate form
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    //Attemp
    if(Auth::guard('admin')->attempt([
      'email' => $request->email,
      'password' => $request->password
    ], $request->remember)){
      //Redirect if Success
      return redirect()->intended(route('admin.dashboard'));
    }
    //Redirect Back if Unsuccess
    return redirect()->back()->withInput($request->only('email','remember'));
  }

  public function logout()
  {
      Auth::guard('admin')->logout();
      return redirect('/');
  }
}
