@extends('Admin.master')
@section('content')


<form action="{{ route('food.store' )}}"  method="post">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1"> Food_name</label><br>
    <input type="text" class="form_contol" id="food" name="food_name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Food_type</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="food_type">
  </div><br>
  <div class="form-group">
    <label for="exampleInputPassword1">Food_category</label><br>
    <textarea class="form-control" id="category" name="food_category" rows="4" cols="50"></textarea>
  </div>
 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection