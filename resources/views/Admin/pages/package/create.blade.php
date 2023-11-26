@extends('Admin.master')
@section('content')

<form action="{{route('package.store')}}" method="post">
  @csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">package name </label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="digit" class="form-control" id="digit" aria-describedby="emailHelp" name="price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">package image</label>
    <input type="file" class="form-control" id="" aria-describedby="emailHelp" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>










@endsection