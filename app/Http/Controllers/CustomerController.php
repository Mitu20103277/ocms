<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
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
        //  dd($customer);
        if(auth()->guard("customer")->attempt($customer)){ 
            Toastr::success("successfully login","Customer");
            return redirect()->route('home');
        } 
        Toastr::error('Invalid user');
        return redirect()->back();
    }
     public function profile(){
         $order=Order::where('customer_id',auth()->guard('customer')->user()->id)->orderBy('id','desc')->get();
          return view('frontend.pages.profile' ,compact('order') );


     }


    











    public function logout(){
        Auth::guard('customer')->logout();
        session()->forget('vcart');
        Toastr::success('successfully logout','Customer');
        return redirect()->route('home');
    }

   public function customerlist(){
    $customers=Customer::all();
    return view('Admin.pages.customer.customerlist',compact('customers'));
   }
  
   
}
