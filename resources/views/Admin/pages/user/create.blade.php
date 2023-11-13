@extends('Admin.master')
@section('content')


<form  action="{{route('user.store')}}"  method="post">
    @csrf
  <div class="form-group">
    <label for="">Enter user name</label>
    <input  type="text" class="form-control" id="" placeholder="Enter name"  name="user_name">
     </div>
     <div class="form-group">
    <label for="">user email</label>
    <input  type="text" class="form-control" id="" placeholder="Enter mail"  name="enter_email">
     </div>
     <div class="form-group">
    <label for="">Enter password</label>
    <input  type="text" class="form-control" id="" placeholder="Enter password"  name="user_password">
     </div>
     <label for="">upload image</label>
    <input  type="file" class="form-control" id="" placeholder=""  name="user_image">
     </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>












@endsection