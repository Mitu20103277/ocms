@extends('frontend.master')

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th class="text-center"  scope="col">Id</th>
                                <th class="text-center"scope="col">Food_name</th>
                                <th class="text-center"scope="col">Quantity</th>
                                <th class="text-end"scope="col">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $subT = 0; 
                                @endphp
                                @foreach($orderDetails as $item)
                                @php 
                                    $subT = $subT + $item->subtotal;
                                @endphp
                                <tr class="border">
                                    <td class="text-center">{{$item->id}}</td>
                                    <td class="text-center">{{$item->food_name}}</td>
                                    <td class="text-center">{{$item->quantity}}</td> 
                                    <td class="text-end">{{$item->subtotal}}</td>
                                </tr>
                                @endforeach
                               
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                    <td class="thick-line text-right">{{$subT}}.BDT</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Shipping</strong></td>
                                    <td class="no-line text-right">70 .BDT</td> 
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total</strong></td>
                                    <td class="no-line text-right">{{$subT + 70}}</td>
                                </tr>
                            </tbody>
                            
                          </table>
                          
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-end ">
                        <a class="btn btn-primary col-1" href="{{route('orderDetails.print')}}">print</a>

                    </div>
                </div>
        </div>
    </div>
</div>  <script type="text/javascript">
        </script>





@endsection