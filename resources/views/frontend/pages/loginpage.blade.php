@extends('frontend.master')

@section('content')
<br>
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-5 p-3 mb-5">

                <div class="card-body ">
                    <h3 class="text-center"><strong>Login Form</strong></h3>
                    <hr>
                    <form action="{{route('customer.dologin')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Email Address</address></label>
                            <input required type="email" name="email" class="form-control" placeholder="Enter email" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password:</label>
                            <input required type="password" name="password" class="form-control" placeholder="password" id="password">
                        </div>
                        <!-- Button trigger modal -->


                        <button style="float: right;" type="submit" class="btn btn-success px-5">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection