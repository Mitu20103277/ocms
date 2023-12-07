@extends('frontend.master')

@section('content')

<h2>Search result for : {{ request()->search }} found {{$foods->count()}} $foods.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($foods->count()>0)
    @foreach ($foods as $food)

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- food image-->
                            
                            <a href="{{route('single.food',$food->id)}}">
                                <img class="card-img-top" src="{{url('/uploads/'.$food->image)}}" alt="..." />
                                <!-- food details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- food name-->
                                        <h5 class="fw-bolder">{{$food->food_name}}</h5>
                                        
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                    
                                        <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                                        {{ $food->price }} .BDT
                                    </div>
                                </div>
                            </a>

                            <!-- food actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                 <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add.toCart',$food->id)}}">Add to cart</a></div>
                               
                        </div>
                    </div>   
                @endforeach

                @else

                    <h1>No food found.</h1>
                @endif


</div>
@endsection