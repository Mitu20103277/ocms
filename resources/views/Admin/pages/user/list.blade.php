@extends('Admin.master')
@section('content')

<table class="table">

    <a href="{{route('users.create')}}" class="btn btn-primary">create new user</a>
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>

</thead>

<tbody> 
 @foreach($users as $key=>$singleuser)
     <tr> 
      <td>{{$key+1}}</td>
      <td>{{$singleuser->name}}</td>
       <td>  
        <img width="60" height="60" src="{{url('/uploads/'.$singleuser->image)}}" alt="image">
      </td>
      <td>{{$singleuser->role}}</td>
      <td>{{$singleuser->email}}</td>
      <td>
       
          <a class="btn btn-primary" href="{{ route('user.edit',$singleuser->id) }}">Edit</a>
          <a class="btn btn-success"  href="">view</a>
          <a class="btn btn-danger"  herf="{{ route('user.delete',$singleuser->id)}}">Delete</a>
      </td>

    </tr>

   @endforeach
   </tbody>
     
</table> 

@endsection