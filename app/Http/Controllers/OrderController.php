<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        $Orders=Order::all();
        return view('Admin.pages.Order.list' ,compact('Orders')   );
    }
    public function create(){
        return view('Admin.pages.Order.create');
    }

    public function store(Request $request){
        $request->validate([
            'order_name'=>'required',
            'status'=>'required',
            'track'=>'required',
        ]);

        
       Order::create([
        'order_name'=>$request->order_name,
         'status'=>$request->status,
        'track'=>$request->track,
        ]);
       return redirect()->route('order.list');




    }
}
    