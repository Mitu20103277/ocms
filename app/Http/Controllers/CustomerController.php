<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function registerPage()
    {
        return view("frontend.pages.register");
    }
    public function doregister(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            "fname"=>"required",
            "lname"=>"required",
            "email"=> "required",
            "password"=> "required |min:6 |max:12",

        ]);
        if ($validate->fails())
        {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();
        }
       
        // dd($otp);
      $customer=Customer::create([
        "first_name"=> $request->fname,
        "last_name"=> $request->lname,
        "email"=> $request->email,
        "password"=> bcrypt($request->password),
    
      ]);
      
      Toastr::success("successfully register");

      return redirect()->route('customer.login');
       
    }
   
   

    public function loginPage()
    {
        return view("frontend.pages.loginPage");
    }
    public function login(Request $request)
    {
        $validate=validator::make($request->all(), [
            "email"=> "required",
            "password"=> "required|min:4",
            ]);
        if( $validate->fails() )
        {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();  
        }
        $customer=$request->except("_token");
        // dd($customer);
        if(auth()->guard("customer")->attempt($customer)){
           
          
            Toastr::success("successfully login" ,"Customer");
            return view("frontend.pages.login");
            return redirect()->route('home');
        }
            
        Toastr::error('Invalid user');
        return redirect()->back();
        
    }
   /*  public function logout()
    {
        Auth::guard('customer')->logout();
        Toastr::success('successfully logout','Customer');
        return redirect()->route('home.page');
    } */

   public function customerlist(){

    $customers=Customer::all();
    return view('Admin.pages.customer.customerlist',compact('customers'));
   }
  
   
}
