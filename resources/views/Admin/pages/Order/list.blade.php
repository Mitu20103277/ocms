@extends('Admin.master')
@section('content')


<a href="{{ route('order.create')}}"  class="btn btn-primary">Order list</a>

<table class="table">

  <thead>
    <tr>
       <th scope="col">Id</th>
      <th scope="col">Order name</th>
      <th scope="col">Status</th>
      <th scope="col">Track Order</th>
    </tr>
  </thead>

  <tbody>
  @foreach($Orders as $id=>$value)
       <tr>
         <td>{{$id+1}}</td>
         <td>{{$value->order_name}}</td>
         <td>{{$value->status}}</td>
         <td>{{$value->track}}</td>
       </tr>

   @endforeach
  </tbody>
</table>
@endsection