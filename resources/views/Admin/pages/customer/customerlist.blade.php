@extends('Admin.master')
@section('content')



<table class="table">
    <h1>Customers list</h1>
    <hr>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $key=>$customers)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$customers->first_name}}</td>
      <td>{{$customers->last_name}}</td>
      <td>{{$customers->email}}</td>
      <td>{{$customers->image}}</td>
    </tr>
    @endforeach
  </tbody>
</table>











@endsection