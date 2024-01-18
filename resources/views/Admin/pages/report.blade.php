@extends('Admin.master')
@section('content')


<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card m-3 p-3">
      <div class="card-body">
        <h2 class="text-center"><strong>Create Order Report</strong></h2>
        <hr class="mb-3">

          <form action="{{route('report.search')}}" method="get">
              @csrf

            <div class="row">
                <div class="col-md-4">
                  <label><strong>From Date</strong></label>
                    <input type="date" name="form_date" class="form-control" value="{{request()->form_date}}">
                </div>
                <div class="col-md-4">
                    <label><strong>To Date</strong></label>
                    <input type="date" name="to_date" class="form-control" value="{{request()->to_date}}">
                </div>
            
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success mt-4">Search</button>
                </div>
              </div>
          </form>
  <div id="orderReport">
    <h2 class="mt-4"><strong>Report of - {{request()->form_date}} to {{request()->to_date}}</strong></h2>
    <hr>

    <table class="table table-bordered" >
                    <thead>
                        <tr>
                         <th scope="col">Id</th>
                         <th scope="col">customer_id</th>
                         <th scope="col">Status</th>
                         <th scope="col">Total Price</th>
                         <th scope="col">payment method</th>
                         <th scope="col">Address</th>
                         <th scope="col">Receiver_mobile</th>
                         <th scope="col"> Receiver_name</th>
                         <th scope="col">Receiver_email</th>
                         <th scope="col">Date$Time</th>
                        
                       
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $id=0;
                        @endphp

                    @if (isset($orderReport))
                     
                      @foreach($orderReport as $value)
                        <tr>
                            <td>{{$id+1}}</td>
                            <td>{{$value->customer_id}}</td>
                             <td>{{$value->status}}</td>
                            <td>{{$value->total_price}}</td>
                            <td>{{$value->payment_method}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->receiver_mobile}}</td>
                            <td>{{$value->receiver_name}}</td>
                            <td>{{$value->receiver_email}}</td>
                            <td>{{$value->created_at}}</td>
                            <td>
                              
                        </tr>
                      @endforeach
                      @endif
                    </tbody>
                </table>
</div>
<div class="d-grid gap-2">
    <button onclick="printDiv('orderReport')" class="btn btn-outline-info">Print</button>

    <script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>
</div>
</div>
 </div>
 </div>
@endsection
























