<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Package;
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
                    'image'=>$food->image,
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
                    'image'=>$food->image,
                    'subtotal'=>1 * $food->price,
            ];

            session()->put('vcart',$newCart);
           Toastr::success('food added to cart succesfully .');
            return redirect()->back();

        }



        return view('frontend.pages.cart');
    }

    public function removeFromCart($id)
    {


        $cart=session()->get('vcart');
        unset($cart[$id]);
        session()->put('vcart',$cart);
        Toastr::success("product remove from cart");
        return redirect()->back();
    }
    public function checkout()
    {
        
        return view('frontend.pages.checkout');
    }
    
     
   
    
      public function addPackageCartItem($fId)
    {
        $package=Food::find($fId);
        // dd($package);

        $cart=session()->get('vcart');
        if($cart){//not empty

            if(array_key_exists($fId,$cart)){//yes
                //qty update
                $cart[$fId]['quantity']=$cart[$fId]['quantity'] + 1;
                $cart[$fId]['subtotal']=$cart[$fId]['quantity'] * $cart[$fId]['price'];

            session()->put('vcart',$cart);
            Toastr::success('package added to cart successfully . ');
            return redirect()->back();


            }else{
             
                $cart[$fId]=[
                    'id'=>$fId,
                    'name'=>$package->food_name,
                    'price'=>$package->price,
                    'quantity'=>1,
                    'image'=>$package->image,
                    'subtotal'=>1 * $package->price,

          
            ];

            session()->put('vcart',$cart);
            Toastr::success('package added to cart succesfully .');
            return redirect()->back();

            }

            return redirect()->back();

        }else{//empty
            //add to cart
            $newCart[$fId]=[
                    'id'=>$fId,
                    'name'=>$package->food_name,
                    'price'=>$package->price,
                    'quantity'=>1,
                    'image'=>$package->image,
                    'subtotal'=>1 * $package->price,
            ];

            session()->put('vcart',$newCart);
           Toastr::success('package added to cart succesfully .');
            return redirect()->back();

        }





}
}
