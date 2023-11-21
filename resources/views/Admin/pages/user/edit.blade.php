@extends('Admin.master')
@section('content')


<form  action=""  method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="">Enter User Name</label>
    <input required type="text" class="form-control" id="" placeholder="Enter name"  name="user_name" value="{{$user->name}}">
    @error('user_name')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
     </div>
     
     <div class="form-group">
    <label for="">  Select Role</label>
    <select required class="form-control" id="" placeholder=" "  name="role" value="{{$user->role}}">
      <option value="manager">manager</option>
    </select>
     </div>

     <div class="form-group">
    <label for="">User Email</label>
    <input required type="text" class="form-control" id="" placeholder="Enter mail"  name="enter_email" value="{{$user->email}}">
    @error('enter_email')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
     </div>
      
     <div class="form-group">
    <label for="">Enter password</label>
    <input required type="text" class="form-control" id="" placeholder="Enter password"  name="user_password">
     @error('user_password')
     <div class="alert alert-danger">{{ $message}}</div>
      @enderror
     </div>



     <div class="form-group">
     <label for="">upload image</label>
    <input type="file" class="form-control"  name="user_image">
    </div>
   
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>












@endsection