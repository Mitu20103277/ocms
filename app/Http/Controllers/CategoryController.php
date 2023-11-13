<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
               
               

               //db colomn name form field name  
             Category::create([
              'Category_name'=>$request->category_name,
               'description'=>$request->description,
             
            ]);
            return redirect()->back();

    }
    
}
