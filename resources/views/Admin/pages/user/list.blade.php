@extends('Admin.master')
@section('content')

<table class="table">

    <a href="{{route('users.create')}}" class="btn-btn-primary">create new user</a>
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>

</thead>



@endsection