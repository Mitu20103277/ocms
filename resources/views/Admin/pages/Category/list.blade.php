@extends('Admin.master')
@section('content')

<h1>Category list</h1>
<a class="btn btn-primary"  href="{{ route('category.create')}}">Create new category</a>
<a href=""></a>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Comment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Categories as $id=>$value)
    <tr>
      <td>{{$id+1}}</td>
      <td>{{$value->category_name}}</td>
      <td>{{$value->description}}</td> 
       <td>{{$value->commets}}</td>
     <td>
      <div class="btn btn-primary" >show</div>
      <div class="btn btn-success">Edit</div>
      <div class="btn btn-danger">Delete</div>
     </td>
    </tr>
   @endforeach

  </tbody>
</table>




@endsection