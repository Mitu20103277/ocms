<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform(){
        return view('Admin.pages.user.loginform');
    }
  
  public function loginpost(Request $request){
    // dd($request->all());
    $validator= Validator::make($request->all(),[
        'email'=>'required|email',
        'password'=>'required|min:6',
    ]);

    if($validator->fails()){
      return redirect()->back()->withErrors($validator);
    }

  
    $credentials=$request->except('_token');

    if(auth()->attempt($credentials))
    {
      // dd('success');
     Toastr::success('successfully login');
      return redirect()->route('dashboard');
    }else{
      Toastr::error('Invalid user');
      return redirect()->back();
    }
   
  }
  public function logout()
  {
    Auth::logout();
    Toastr::success('successfylly logout');
    return redirect()->route('admin.login');
  }

} 
