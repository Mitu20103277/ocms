@extends('frontend.master')


@section('content')


<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i class='fa fa-apple fs-1'></i>
                         <span class="fw-bold ms-1 fs-5">{{$singlefood->food_id}}</span> </div>
                        <h1 class="fs-1 ms-1 mt-3">{{$singlefood->food_name}}</h1>
                        <div class="ms-1">Category: <span>{{$singlefood->category->category_name}}</span> </div>
                        <div class="ms-1">Price: <span>{{$singlefood->price}} .BDT</span> </div>
                        <div class="ms-1">Description: <span>{{$singlefood->item_description}}</span> </div>
                        
                     </div>
                    <div class="col-md-8">
                        <div class="food-image"> <img src="{{url('/uploads/'.$singlefood->image)}}"> </div>
                    </div>

                    <div class="mt-5 radio-buttons"> 
                            <a class="btn btn-danger p-0" href="{{ route('add.toCart',$singlefood->id) }}">AddToCart</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



