@extends('Admin.master')
@section ('content')

<a class="btn btn-primary" href="{{ route('food.create') }}">Create new food</a>
<table class="table">

  <thead>

    <tr>

      <th scope="col">Id</th>
      <th scope="col">Food Name</th>
      <th scope="col">Category</th>
      <th scope="col">Type</th>
      <th scope="col">price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
    @foreach($foods as $id=>$value)
    <tr>
      <td> {{$id+1}}</td>
      <td>{{$value->food_name}}</td>
      <td>{{$value->category->category_name}}</td>
      <td>{{$value->type}}</td>
      <td>{{$value->price}}</td>
      <td> 
        <a href=""><img width="60" height="60" src="{{url('/uploads/'.$value->image)}}" alt="image"></a></td>
      <td>
        
        <a class="btn btn-primary" href="">show</a>
        <a class="btn btn-success" href="{{route('food.edit',$value->id)}}">edit</a>
        <a class="btn btn-danger" href="{{route('food.delete',$value->id)}}">Delete</a>
        
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection