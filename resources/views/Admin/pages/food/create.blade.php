@extends('Admin.master')
@section('content')


<form action="{{ route('food.store' )}}"  method="post">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1"> Food_name</label><br>
    <input type="text" class="form_contol" id="food" name="food_name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Food_category</label><br>
    <input type="text" class="form_control" id="category" name="enter_category">
  </div>
  <div class="form-group">
    <label for="">price</label><br>
    <input type="text" class="form_control" id="category" name="enter_price">
  </div>
  <div class="form-group">
    <label for="">image</label><br>
    <input type="file" class="form_control" id="" name="enter_image">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection