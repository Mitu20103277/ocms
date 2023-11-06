@extends('Admin.master')
@section('content')


<form action="{{ route('order.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Order Name</label><br>
        <input type="text" class="form-control" id="name" name="order_name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Status</label><br>
        <textarea class="form-control" name="status" rows="4" cols="50"></textarea>
      </div>
      <div class="form-group">
        <label for="">Track Order</label><br>
        <input type="text" class="form-control" name="track" id="track">
       
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>









@endsection