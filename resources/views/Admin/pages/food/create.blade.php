@extends('Admin.master')
@section('content')

   <h1>Create Food</h1>
   <hr>
<form action="{{ route('food.store')}}"  method="post"  enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1"> Food_name</label><br>
    <input type="text" class="form-control" id="food" name="food_name">
    </div>
    <div class="form-group">
    <label for=""> select type</label>
    <select required class="form-control" id="" placeholder=""  name="type">
      <option value="item">item</option>
      <option value="packages">package</option>
    </select>
     </div>


    <div class="form-group">
    <label for="exampleInputEmail1">category</label><br>
   <select name="category_id" class="form-control"  id="">
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->category_name}}</option>
    @endforeach
   </select>
    </div>

  <div class="form-group">
    <label for="">price</label><br>
    <input type="text" class="form-control" id="category" name="enter_price">
  </div>
  <div class="form-group">
    <label for="">quantity</label><br>
    <input type="number" class="form-control" id="category" name="quantity">
  </div>
  
<div class="form-group">
    <label for="">image</label><br>
    <input type="file" class="form-control" name="enter_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection