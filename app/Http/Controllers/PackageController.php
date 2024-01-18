<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Package;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function list(){
        
        $packages=Food::where("type",'packages')->get();
        //   dd($packages);
        return view('Admin.pages.package.list',compact('packages'));
    }
    public function create(){
        return view('Admin.pages.package.create');
    }
    public function store(request $request){
    
    // dd($request->all());
       $request->validate([
        'name'=>'required',
         'price'=>'required',
         
    ]);

    $fileName=null;
    if($request->hasFile('image'))
    {
        $file=$request->file('image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
       
        $file->storeAs('/uploads',$fileName);

    }
       
       Package::create([

        'name'=>$request->name,
        'price'=>$request->price,
        'image'=>$fileName


       ]);
       return redirect()->route('package.list');

    }
      public function delete($id){
        Package::destroy($id);
        toastr()->error('package succssfully deleted.');
        return redirect()->back();
      }

}
