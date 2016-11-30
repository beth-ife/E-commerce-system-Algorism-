@extends('admin/admin_layout')
@section('title')
Order
@stop
@section('page_name')
::Process Order
@stop
@section('content')
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">New Order</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <tr><th>Order Id:</th><td>{{$order->order_id}}
                                    <input type="hidden" value="{{$order->id}}" id="o_id"/>
                                </td></tr>
                            <tr>
                                <th>Shipment Status</th>
                                <td>
                                    @if($order->isShipped ==1)
                                    Shipped
                                    @else
                                    Unshipped
                                    @endif
                                </td>
                            </tr>
                            <tr><th>Total Price: </th><td>NGN {{$order->total_price}}</td></tr>
                            <tr>
                                <th>Customer</th>
                                <td>
                                    {{$customer->firstName}} 
                                    {{$customer->lastName}} <br>
                                    <label>Phone: </label>{{$customer->phone}} <br>
                                    <label>Email: </label>{{$customer->email}} 
                                </td></tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    {{$address->street}},
                                    {{$address->city}}, 
                                    {{$address->state}}
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-striped table-hover">
                            <th>Product</th>
                            <th>Quantity</th>
                            @foreach($order->order_products as $order)
                            <tr>
                                <td>{{$order->product}}</td>
                                <td>{{$order->quantity}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                   
                    <div class="box-footer">
                        <button type="submit" id="shipOrder" class="btn btn-primary">Set as Shipped</button>
                    </div>
                   
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->

    </div>
    <!-- /.row -->
</section>
@stop
@section('last_scripts')
<script>
    $('#shipOrder').click(function(){
        order_id = $('#o_id').val();
        
         $.ajax({
                            type: 'POST',
                            url : '/ship',
                            data:{order_id: order_id },
                            success: function(result){
                                console.log(result);
                            },
                            error: console.log('error')
                        });
    });
</script>
@stop