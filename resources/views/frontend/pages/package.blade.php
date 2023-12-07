@extends('frontend.master')

@section('content')
<div class="container mt-5 mb-5">
    <h1 class="text-center"><b>All packages</b></h1>
    <hr>
    <div class="row mb-3">

         @foreach($packages as $package )
       
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/uploads/',$package->image) }}" alt="image">
                <div class="card-body">
                    <p class="card-text">{{ $package->name }}</p>
                    <div class="badge p-3 bg-danger"><span>Price : </span>{{ $package->price }} <span>Taka.</span></div>
                </div>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endsection