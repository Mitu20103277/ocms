<?php

namespace App\Http\Controllers;

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
    dd($request->all());
    $validator= Validator::make($request->all(),[
        'email'=>'required|email',
        'password'=>'required|min:6',
    ]);

    if($validator->fails()){
      return redirect()->back()->withErrors($validator);
    }


    $credentials=$request->except('_token');
          dd($credentials);
    $login=auth()->attempt( $credentials);
    if($login){
      return redirect()->route('dashboard');
    }
    return Redirect()->back()->with('message','invalid user email or password');
    

    //  dd($request);
  }

} 
