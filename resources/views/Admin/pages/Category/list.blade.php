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
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Categories as $id=>$value)
    <tr>
      <td>{{$id+1}}</td>
      <td>{{$value->category_name}}</td>
      <td>{{$value->description}}</td> 
      
     <td>
      <a class="btn btn-primary" >show</a>
      <a class="btn btn-success"href="{{route('category.edit',$value->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('category.delete',$value->id)}}">Delete</a>
     </td>
    </tr>
   @endforeach

  </tbody>
</table>




@endsection