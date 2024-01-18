@extends('frontend.master')
@section('content')


<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <!-- <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                            </div> -->
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">{{auth()->guard('customer')->user()->first_name}} {{auth()->guard('customer')->user()->last_name}}</h3>




                                    <span class="text-primary"></span>
                                </div>


                                <div class="col-lg-6 px-xl-10">
                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h3 class="h2 text-white mb-0"></h3>
                                    </div>



                                    <ul class="list-unstyled mb-1-9">
            

                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{auth()->guard('customer')->user()->email}}</li>
         
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">role:</span> customer</li>
                                    </ul>
                                    <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                        <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4 mb-sm-5">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">customer name</th>
                                <th scope="col">customer mobile</th>
                                <th scope="col">Address</th>
                                
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->receiver_name}}</td>
                                <td>{{$item->receiver_mobile}}</td>
                                <td>{{$item->address}}</td>
                               
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->payment_status}}</td>
                                <td>
                                    <button><a href="{{route('user.order.details',$item->id)}}">View Details</a></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>








                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>







@endsection