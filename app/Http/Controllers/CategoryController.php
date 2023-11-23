<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller
{
    public function list(){
       $Categories=Category::all();
      // dd($Categories);
        return view('Admin.pages.Category.list',compact('Categories'));
    }
     public function create(){
        return view('Admin.pages.category.create');
    }
    public function store(Request $request){

        $validate=Validator::make($request->all(),[
           'category_name'=>'required',
           'description'=>'required',
           
           //field name
        ]);
        if($validate->fails()){
         Toastr::error($validate->getMessageBag()->first());
         return redirect()->back();
        }

               //db colomn name form field name  
             Category::create([
              'Category_name'=>$request->category_name,
               'description'=>$request->description,
             
            ]);
            Toastr::success('category successfully created.');
            return redirect()->route('category.list');

    }
   public function edit($id){
      
      $category=Category::find($id);
      return view('Admin.pages.Category.edit',compact('category'));

      

   } 

public function update(Request $request, $id){

   $validate=Validator::make($request->all(),[
      'category_name'=>'required',
      'description'=>'required',
      
      //field name
   ]);

      $category=Category::find($id);
        $category->update([
         'Category_name'=>$request->category_name,
          'description'=>$request->description,
        
       ]);
       Toastr::success('Category','category successfully updated.');
       return redirect()->route('category.list');
}
    public function delete($id){
      Category::destroy($id);
      toastr()->error('category succssfully deleted.');
      return redirect()->back();
}

    
}
