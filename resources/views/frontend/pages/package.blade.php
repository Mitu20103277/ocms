@extends('frontend.master')

@section('content')
<div class="container mt-5 mb-5">
    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center"><b>All packages</b></h1>
    <hr>
    <div class="row mb-3">

         @foreach($packages as $package )
       
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
            <a href="{{route('single.package',$package->id)}}">                
                <img class="w-100" src="{{ url('/uploads/',$package->image) }}" alt="image" height="250">
            </a>
                <div class="card-body">
                    <p class="card-text">{{ $package->food_name }}</p>
                    <div class="badge p-3 bg-danger"><span>Price : </span>{{ $package->price }} <span>Taka.</span></div>
                </div>

                <div class="card-body">
                  
                <!-- <div class="center"><a class="btn btn-primary" href="">Details</Details></a></div> -->


                </div>
               
             
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                 <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add.cartItem',$package->id)}}">Add tocart</a></div>

                 </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endsection