@extends('Admin.master')
@section('content')


<h1>Dashboard</h1>


<div class="row">
    <div class="col-md-4 d-flex">
        <div class="card flex-fill">
            <div class="card-body py-4">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h3 class="mb-2">{{$customercount}}</h3>
                        <p class="mb-2">Total customer</p>
                        <div class="mb-0">
                            <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                            <span class="text-muted">Since last week</span> -->
                        </div>

                      <a href="{{route('customer.list')}}">Details</a>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">

                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 d-flex" >
        <div class="card flex-fill">
            <div class="card-body py-4" >
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h3 class="mb-2">{{$foodcount}}</h3>
                        <p class="mb-2">Total food</p>
                        <div class="mb-0">
                            <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                            <span class="text-muted">Since last week</span> -->
                        </div>

                        <a href="{{route('food.list')}}">Details</a>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle text-success">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 d-flex">
        <div class="card flex-fill">
            <div class="card-body py-4">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h3 class="mb-2">{{$ordercount}}</h3>
                        <p class="mb-2">Total Orders</p>
                        <div class="mb-0">
                            <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                            <span class="text-muted">Since last week</span> -->
                        </div>

                        <a href="{{route('order.list')}}">Details</a>
                    </div>
                    <div class="d-inline-block ms-3">
                        <div class="stat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle text-success">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection



