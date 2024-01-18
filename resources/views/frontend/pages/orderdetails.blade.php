@extends('frontend.master')
@section('content')

<div class="container">
<div class="row" style="margin-top: 100px;">
    <div class="">
        <button class="btn btn-success" onclick="printContent('printDiv')">Print</button>
    </div>

    <div id="printDiv">
        <div class="col-xs-12">

            <div class="invoice-title">
                {{-- <h2>Invoice</h2>
                <h3 class="pull-right">{{$order->id}}</h3> --}}
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>

                        <strong>Billed To:</strong><br>

                        {{$order->receiver_name}}<br>
                        {{$order->receiver_address}}<br>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Shipped To:</strong><br>
                        {{$order->receiver_name}}<br>
                        {{$order->receiver_address}}<br>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        {{$order->payment_method}}<br>
                        
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        {{$order->created_at}}<br><br>
                    </address>
                </div>
            </div>
        </div>


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
                                        <th class="text-center" scope="col">Id</th>
                                        <th class="text-center" scope="col">Food_name</th>
                                        <th class="text-center" scope="col">Quantity</th>
                                        <th class="text-end" scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $subT = 0;
                                    @endphp
                                    @foreach($orderdetails as $item)
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
            </div>

        </div>
    </div>

</div>
</div>
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