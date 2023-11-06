@extends('Admin.master')
@section ('content')

  <a class="btn btn-primary"  href="{{ route('food.create') }}">Create new food</a>
  <table class="table">

  <thead>

     <tr>

      <th scope="col">Id</th>
      <th scope="col">Food_name</th>
      <th scope="col">Food_type</th>
      <th scope="col">Food_category</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
   @foreach($foods as $id=>$value)
   <tr>
      <td> {{$id+1}}</td>
       <td>{{$value->food_name}}</td>
       <td>{{$value->food_type}}</td>
       <td>{{$value->food_category}}</td>
   <td>
       <div class="btn btn-primary">show</div>
       <div class="btn btn-danger">Delete</div>
      <div class="btn btn-success">Add</div>
     
   </td>
   </tr>
   @endforeach

  </tbody>
</table>
@endsection