<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Orderdetails;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderPlace(Request $request){

           //validation here

           
           $cart=session()->get('vcart');
        
           
          $Order=Order::create([
           'user_id' =>auth()->user()->id,
           'status'=>'pending',
           'total_price'=>array_sum(array_column($cart,'subtotal')),
           'address'=>$request->address,  
           'receiver_mobile'=>$request->phone_number,
           'receiver_name'=>$request->name,
           'receiver_email'=>$request->email_address,
           ]);
    
           //create order details
        foreach($cart as $key=> $item)
        {
            Orderdetails::create([
                'order_id'=>$Order->id,
                'food_id'=>$item['id'],
                'quantity'=>$item['quantity'],
                'subtotal'=>$item['subtotal'],
            ]);
        }

        session()->forget('vcart');
        Toastr::success('order placed success');
        return redirect()->back();



    }
}
    