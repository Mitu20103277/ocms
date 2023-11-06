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
           'food_type' =>'required',
           'food_category' =>'required',
    ]);

    Food ::create([
        'food_name'=>$request->food_name,
       'food_type'=>$request->food_type,
        'food_category'=>$request->food_category,
    ]);
    return redirect()->route('food.list');


}
}
