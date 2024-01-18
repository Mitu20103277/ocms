<?php

namespace App\Http\Controllers;

use App\Http\Middleware\customer;
use App\Models\Food;
use App\Models\Package;
use App\Models\Category;
use App\Models\Order;
use App\Models\Orderdetails;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $foods = Food::where('type', 'item')->get();
        $package=Package::all();
       // dd($foods);
        return view('frontend.pages.home', compact('foods','package'));

    }
    
    public function search(Request $request)
    {
        // dd(request()->all())
 
        if($request->search)
        {
            $foods=Food::where('food_name','LIKE','%'.$request->search.'%')->get();
            //select * from food where name like %  %;
        }else{
            $foods=Food::get();
        }
       
 
        
        return view("frontend.pages.search",compact('foods'));
    }
          

        

   public function food(){
       $foods = Food::where('type', 'item')->get();
        // dd($foods);
       return view('frontend.pages.category',compact('foods'));
   }
   

   public function singlefoodview($foodId){
    $singlefood= Food::find($foodId);
      return view('frontend.pages.foodview',compact('singlefood'));

   }

   public function foodsUnderCategory($category_id){
            $foodsUnderCategory=Food::where('category_id', $category_id)->get();
            return view('frontend.pages.foods-under-category',compact('foodsUnderCategory'));
   }
  


   public function package(){
       $packages=Food::where('type','packages')->get();
    //  dd($packages);
    return view('frontend.pages.package',compact('packages'));
   }

   public function singlepackage($foodId){
    // dd($foodId);
    $singlepackage=Food::find($foodId);   
    // dd($singlepackage);  
    return view('frontend.pages.singlepackage',compact('singlepackage'));
   }

   

   public function  details (){
    // dd('data');
    $packages=Food::where('type','packages->food_name')->get();
    return view('frontend.pages.singlepackage',compact('packages'));
   }
   
 public function orderdetails($id){
        
    // dd($id);
    $order=Order::find($id);
    // dd($order);
   $orderdetails=Orderdetails::where('order_id', $id)->get();
//    dd($orderdetails);
   return view('frontend.pages.orderdetails',compact('orderdetails','order'));

 }


   public function service(){
    return view('frontend.pages.service');


   }

  
  public function refundspolicy(){
    return view('frontend.pages.refundpolicy');

  }








}