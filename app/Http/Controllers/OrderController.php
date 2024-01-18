<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Order;
use App\Models\Food;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Orderdetails;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Throwable;

class OrderController extends Controller
{
    public function orderPlace(Request $request){

       
        
if(session()->has('vcart') && count(session()->get('vcart'))>0)
{

    $cart=session()->get('vcart');
        
           
    $Order=Order::create([
     'customer_id' =>auth('customer')->user()->id,
     'status'=>'pending',
     'total_price'=>array_sum(array_column($cart,'subtotal'))+70,
     'address'=>$request->address,  
     'receiver_mobile'=>$request->phone_number,
     'receiver_name'=>$request->name,
     'receiver_email'=>$request->email_address,
     'transaction_id'=>date('YmdHis'),
     'payment_status'=>'pending'
     ]);

     
     //create order details
  foreach($cart as $key=> $item)
  {
      Orderdetails::create([
          'order_id'=>$Order->id,
          'food_id'=>$item['id'],
          'food_name'=>$item['name'],
          'quantity'=>$item['quantity'],
          'subtotal'=>$item['subtotal'],
        //   'total_price'=>array_sum(array_column($cart,'subtotal'))+70,
      ]);
  }
  session()->forget('vcart');
//new line
$food = Food::find($item['id']);
// dd($food);

if ($food) {
    $food->update([
        'quantity' => $food->quantity - $request->quantity,
        // 'total' => $food->price * $request->quantity,
    ]);
}

//    dd($Order);
 $this->payNow($Order);  
 Toastr::success('order placed success');
 return redirect()->back();
}

     
Toastr::error('Your cart is empty');
return redirect()->back();

        
    }



    //backend
     public function list(){
        $Orders=Order::orderBy('id','desc')->get();
       return view('admin.pages.order.list',compact('Orders'));

     }
    
     public function orderDetails($id){
        $Order=Order::with('details')->find($id);
        // dd($Order->toArray());
       return view('admin.pages.Order.orderDetails',compact('Order'));
     }



     public function delete($id){
        Order::destroy($id);
      toastr()->error('user succssfully deleted.');
      return redirect()->back();

     }
    
     


    public function payNow($payment){
    //    dd($order);
        $post_data = array();
        $post_data['total_amount'] = (int) $payment->total_price; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] =$payment->transaction_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $payment->receiver_name;
        $post_data['cus_email'] =$payment-> receiver_email;
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";
        
        // dd($post_data);

        #Before  going to initiate the payment order status need to insert or update as Pending.
 

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');
      
      
        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }



    }



}
    