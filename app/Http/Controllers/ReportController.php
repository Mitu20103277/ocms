<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function Report()
    {
        return view('admin.pages.report');
    }
    public function  ReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $orderReport = Order::whereBetween('created_at',[$form,$to])->where('payment_status','confirm')->get();
       
          
        
        return view('admin.pages.report',compact('orderReport'));
    }
}

