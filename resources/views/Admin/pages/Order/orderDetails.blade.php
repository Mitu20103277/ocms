@extends('Admin.master')
@section('content')
<div class="mb-3">
        <button class="btn btn-success" onclick="printContent('printDiv')">Print</button>
     </div>
     <div id="printDiv">
<table class="table">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Order Id</th>
      <th scope="col">Food Name</th>
      <th scope="col">Ouantity</th>
      <th scope="col">Subtotal</th>
      
      </tr>
  </thead>
  <tbody>
  @foreach($Order->details as $id=>$value)
  
    <tr>
    <td>{{$id+1}}</td>
     <td>{{$value->order_id}}</td>
     <td>{{$value->food_name}}</td>

     <td>{{$value->quantity}}</td>
     <td>{{$value->subtotal}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div>Total: {{$Order->total_price}} Tk</div>



<script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>



@endsection