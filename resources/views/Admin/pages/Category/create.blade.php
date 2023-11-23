@extends('Admin.master')
@section('content')

<h1 class="text-center"><Strong>Create Category</Strong></h1>
<hr>
<div class="card">
  <div class="card-body">
    <form action="{{route('category.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Enter category name</label><br>
        <input reqired type="enter category price" class="form-control" id="category" name="category_name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label> <br>
        <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
     <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


  </div>
</div>













@endsection