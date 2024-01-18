@extends('frontend.master')

@section('content')

<div class="container mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2 p-4">
                <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2"> </span></div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <h6 class="mb-0">Shopping cart</h6>
                <div class="d-flex justify-content-between"><span>You have
                        @if(session()->has('vcart'))
                        {{ count(session()->get('vcart')) }}
                        @else
                        0
                        @endif
                        items in your cart</span>
                </div>
               
                <hr>
                
               
                @php


                $subtotal=0;


                @endphp


                @if(session()->has('vcart'))
                @php


                $subtotal=array_sum(array_column(session()->get('vcart'),'subtotal'));

                @endphp

                @foreach (session()->get('vcart') as $item )
                <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex flex-row"><img class="rounded" src="{{asset('/uploads/'.$item['image'])}}" width="40">
                        <div class="ms-2"><span class="spec">{{$item['name']}}</span></div>
                    </div>
                    <div class="d-flex flex-row align-items-center"><span class="d-block">{{$item['quantity']}} x {{$item['price']}} BDT</span><span class="d-block ml-5 font-weight-bold"> = {{$item['subtotal']}} BDT</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    <div> <a href="{{route('removeFrom.cart',$item['id'])}}"><i class="bi bi-file-x"></i></a> </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
        <div class="col-md-4 mt-5">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
         
         <div class="d-flex justify-content-between information"><span>Subtotal</span><span>{{  $subtotal }} BDT</span></div>
            <div class="d-flex justify-content-between information"><span>Delivery</span><span>@if(!empty(session()->get('vcart')) && count(session()->get('vcart')) > 0)70.00 BDT @else 0.00 BDT @endif</span></div>
            <div class="d-flex justify-content-between information"><span>Total</span><span>@if(!empty(session()->get('vcart')) && count(session()->get('vcart')) > 0){{  $subtotal+70 }} BDT @else 0.00 BDT @endif</span></div>
            @if(session()->has('vcart'))
            <a href="{{route('checkout')}}" class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"><span>pay with sslcommerz<i class="fa fa-long-arrow-right ml-1"></i></span></a>
            @endif
        </div>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection