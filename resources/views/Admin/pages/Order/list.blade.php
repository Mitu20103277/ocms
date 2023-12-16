@extends('Admin.master')
@section('content')


<table class="table">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">customer_id</th>
      <th scope="col">Status</th>
      <th scope="col">Total Price</th>
      <th scope="col">payment method</th>
      <th scope="col">Address</th>
      <th scope="col">Receiver_mobile</th>
      <th scope="col"> Receiver_name</th>
      <th scope="col">Receiver_email</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>

  <tbody>
  @foreach($Orders as $id=>$value)
    <tr>
      <td>{{$id+1}}</td>
      <td>{{$value->customer_id}}</td>
      <td>{{$value->status}}</td>
      <td>{{$value->total_price}}</td>
      <td>{{$value->payment_method}}</td>
      <td>{{$value->address}}</td>
      <td>{{$value->receiver_mobile}}</td>
      <td>{{$value->receiver_name}}</td>
      <td>{{$value->receiver_email}}</td>

      <td>
        <a href="{{route('order.details', $value->id)}}" class="btn btn-primary">view</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>

   @endforeach
  </tbody>
</table>
@endsection