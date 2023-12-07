@extends('Admin.master')
@section('content')


<a class="btn btn-primary" href="{{ route('package.create') }} "> create package</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Package Name</th>
      <th scope="col">Package Price</th>
      <th scope="col">Package Image</th>
      <th scope="col">Action</th>
    </tr>
  
  </thead>
  <tbody>
    @foreach($packages as $id=>$value)
     <tr>
     <td>{{$id+1 }}</td>
     <td>{{$value->name }}</td>
     <td>{{$value->price}}</td>
      <td>
        <img width="60" height="60" src="{{url('/uploads/'.$value->image)}}" alt="image"></td>
      <td>

        <a class="btn btn-primary">show</a>
        <a class="btn btn-danger"  href="{{route('package.delete', $value->id)}}">delete</a>
        <a  class="btn btn-success">edit</a>
     </td>
    </tr>
    @endforeach


  </tbody>
</table>







@endsection