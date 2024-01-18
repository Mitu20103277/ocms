<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Package;
use Illuminate\Http\Request;

class FoodController extends Controller
{
  public function foodList()
  {
    
    $type=Food::where('type','Packages')->get();
    $foods=Food::with('category')->get();

     
  return view('Admin.pages.food.list', compact('foods'));
  }
public function foodCreate()
{

  $categories= Category::all();
    return view('Admin.pages.food.create', compact('categories'));
}


   
public function foodstore(request $request){
      //  dd($request->all());
    $request->validate([
           'food_name' =>'required',
           'category_id' =>'required',
           'enter_price' =>'required',
           'enter_image' =>'required'
    ]);

    
    $fileName=null;
    if($request->hasFile('enter_image'))
    {
        $file=$request->file('enter_image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
       
        $file->storeAs('/uploads',$fileName);

    }

        
     $food = Food::create([
            
        'food_name'=>$request->food_name,
        'category_id'=>$request->category_id,
         'price'=>$request->enter_price,
         'type'=> $request->type,
         'image'=>$fileName,
         'quantity'=>$request->quantity,
         'total'=>$request->quantity*$request->enter_price,
    ]);
    // dd($food);
    return redirect()->route('food.list');


}

  public function edit($id){
    $food=Food::find($id);
    
    $categories=Category::all();
    return view('Admin.pages.food.edit', compact('food','categories'));
  }
  
  public function update(Request $request,$id){
   $food=Food::find($id);
    if($food){
     $fileName=$food->image;
     if($request->hasFile('enter_image'))
     {
         $file=$request->file('enter_image');
         $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
        
         $file->storeAs('/uploads',$fileName);
 
     }
     $food->update([
      'food_name'=>$request->food_name,
     'category_id'=>$request->category_id,
      'price'=>$request->enter_price,
      'image'=>$fileName,
      'quantity'=>$request->quantity,
      'total'=>$request->quantity*$request->enter_price,

     ]);
 
    }
 
  }
  public function show($id){
    // dd($id);
  }
  public function delete($id){
    Food::find($id)->delete();
    toastr()->error('food succssfully deleted.');
    return redirect()->back();
  }


  
}




