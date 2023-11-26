<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function list(){
        $packages=Package::all();
          
        return view('Admin.pages.package.list',compact('packages'));
    }
    public function create(){
        return view('Admin.pages.package.create');
    }
    public function store(request $request){
    
    
       $request->validate([
        'name'=>'required',
         'price'=>'required',
         
    ]);

    $fileName=null;
    if($request->hasFile('enter_image'))
    {
        $file=$request->file('enter_image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
       
        $file->storeAs('/uploads',$fileName);

    }
       
       Package::create([

        'name'=>$request->name,
        'price'=>$request->price,
        'image'=>$request->image


       ]);
       return redirect()->route('package.list');

    }




}
