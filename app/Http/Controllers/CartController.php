<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {

        return view('frontend.pages.cart');
    }


    public function addToCart($pId)
    {
        $food=Food::find($pId);

        $cart=session()->get('vcart');
        if($cart){//not empty

            if(array_key_exists($pId,$cart)){//yes
                //qty update
                $cart[$pId]['quantity']=$cart[$pId]['quantity'] + 1;
                $cart[$pId]['subtotal']=$cart[$pId]['quantity'] * $cart[$pId]['price'];

            session()->put('vcart',$cart);
            Toastr::success('food added to cart successfully . ');
            return redirect()->back();


            }else{//no
                //add to cart
                $cart[$pId]=[
                    'id'=>$pId,
                    'name'=>$food->food_name,
                    'price'=>$food->price,
                    'quantity'=>1,
                    'subtotal'=>1 * $food->price,
            ];

            session()->put('vcart',$cart);
            Toastr::success('food added to cart succesfully .');
            return redirect()->back();

            }

            return redirect()->back();

        }else{//empty
            //add to cart
            $newCart[$pId]=[
                    'id'=>$pId,
                    'name'=>$food->food_name,
                    'price'=>$food->price,
                    'quantity'=>1,
                    'subtotal'=>1 * $food->price,
            ];

            session()->put('vcart',$newCart);
           Toastr::success('food added to cart succesfully .');
            return redirect()->back();

        }



        return view('frontend.pages.cart');
    }
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }


}

