<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $foods = Food::all();
       // dd($foods);
        return view('frontend.pages.home', compact('foods'));
    }
    
   // public function food(){
        
    
        //dd($foods);
       // return view('frontend.pages.home',compact('foods'));
   // }
   



}


