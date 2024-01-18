<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function home()
    {

        // return view('Admin.pages.dashboard.list',compact('orders'));



        $customers = Customer::all();
        $customercount = $customers->count();

        $orders = Order::all();
        $ordercount = $orders->count();

        $foods = Food::all();
        $foodcount = $foods->count();

        return view('admin.pages.dashboard.list', compact('customercount', 'ordercount' , 'foodcount'));
    }
}
