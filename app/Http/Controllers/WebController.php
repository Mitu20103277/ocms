<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Package;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $foods = Food::all();
       // dd($foods);
        return view('frontend.pages.home', compact('foods'));
    }
    
   public function food(){
        $foods=Food::all();
        // dd($foods);
       return view('frontend.pages.category',compact('foods'));
   }
   
   public function package(){
       $packages=package::all();
    return view('frontend.pages.package',compact('packages'));
   }


}


