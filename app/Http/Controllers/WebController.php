<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $foods = Food::all();
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
            $foods=Food::all();
        }
       
 
        
        return view("frontend.pages.search",compact('foods'));
    }
          

        

   public function food(){
        $foods=Food::all();
        // dd($foods);
       return view('frontend.pages.category',compact('foods'));
   }
   

   public function singlefoodview($foodId){
    $singlefood= Food::find($foodId);
      return view('frontend.pages.foodview',compact('singlefood'));

   }
   

  


   public function package(){
       $packages=Food::where('type','packages')->get();
    //  dd($packages);
    return view('frontend.pages.package',compact('packages'));
   }
   
   public function category(){
    $categories=Category::all();
    //dd($categories);
    return view('frontend.pages.category',compact('categories'));
}

  

}