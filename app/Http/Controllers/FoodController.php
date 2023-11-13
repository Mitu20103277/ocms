<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
public function foodList(){
    $foods=Food ::all();
    //dd($Foods);
    return view('Admin.pages.food.list', compact('foods'));
     }
       public function foodCreate(){

    return view('Admin.pages.food.create');
}
public function foodstore(request $request){
    //dd($request->all());
    $request->validate([
           'food_name' =>'required',
           'enter_category' =>'required',
           'enter_price' =>'required',
           'enter_image' =>'required'
    ]);

    Food ::create([
        'food_name'=>$request->food_name,
        'food_category'=>$request->enter_category,
         'price'=>$request->enter_price,
         'image'=>$request->enter_image,
    ]);
    return redirect()->route('food.list');


}
}
