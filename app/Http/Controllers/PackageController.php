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
       Package::create([

        'name'=>$request->name,
        'price'=>$request->price,



       ]);
       return redirect()->route('package.list');

    }




}
