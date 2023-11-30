<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    Toastr::success('successfully logout');
    return redirect()->route('admin.login');
  }


  public function list()
  {
    $users= User::all();
    return view('Admin.pages.user.list',compact('users'));
  }
   
  public function createform()
  {
    return view('Admin.pages.user.create');
  }
   public function store(request $request){
               
    $validate=Validator::make($request->all(),[
        
          'user_name'=>'required',
          'role'=>'required',
           'enter_email'=>'required',
           'user_password'=>'required',
        ]);
         
        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }




        $fileName=null;
        if($request->hasFile('user_image'))
        {
            $file=$request->file('user_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
           
            $file->storeAs('/uploads',$fileName);

        }
          
            User::create([
             
              'name'=>$request->user_name,
              'role'=>$request->role,
              'email'=>$request->enter_email,
              'password'=>$request->user_password,
              'image'=>$fileName
            ]);
           return redirect()->back()->with('message','user created successfully');
      
    

   }


   public function edit($id){
     
   $user=User::find($id);
   return view('Admin.pages.user.edit',compact('user'));


   }
}

   



