@extends('frontend.master')
@secetion('Content')



       @foreach($foods as $food)
     <p>{{$food->food_name}}</p>
       <p>{{$food->category_id}}</p>
       <p>{{$food->price}}</p>
       <p>{{$food->image}}</p>
       
       @endforeach






@endsection