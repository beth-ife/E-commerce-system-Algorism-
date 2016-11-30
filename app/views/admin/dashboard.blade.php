@extends('admin/admin_layout')
@section('title')
Dashboard
@stop
@section('page_name')
Home
@stop
@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$all_orders->count()}}</h3>

                    <p>Orders</p>
                </div>
                <div class="icon">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-black">
                <div class="inner">
                    <h3>{{$all_products->count()}}
                        <!--<sup style="font-size: 20px">%</sup>-->
                    </h3>

                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$all_categories->count()}}
                        <!--<sup style="font-size: 20px">%</sup>-->
                    </h3>

                    <p>Categories</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$all_customers->count()}}</h3>

                    <p>Customer(s)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li ><a class="active" href="#shipped" data-toggle="tab">Shipped</a></li>
                    <li ><a href="#unshipped" data-toggle="tab">Unshipped</a></li>
                    <li class="pull-left header"><i class="fa fa-inbox"></i>Orders</li>
                </ul>
                <div class="tab-content no-padding">
                    <!-- Orders -->
                    <div class="tab-pane active" id="shipped" style="position: relative;">
                        <table class="table table-bordered">
                            <th>s/n</th>
                            <th>Order Id</th>
                            <th>Total Price</th>
                            <th>Customer</th>
                            <th>Date and Time of Transaction</th>
                            @foreach($all_orders_Ship as  $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{$order->customer_id}}</td>
                                <td>{{$order->updated_at}}</td>
                                <td>
                                    <a href="process_{{$order->id}}" class="btn btn-vimeo btn-sm">
                                        View Order
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="tab-pane" id="unshipped" style="position: relative;">
                        <table class="table table-bordered">
                            <th>s/n</th>
                            <th>Order Id</th>
                            <th>Total Price</th>
                            <th>Customer</th>
                            <th>Date and Time of Transaction</th>
                            @foreach($all_orders_uShip as  $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{$order->customer_id}}</td>
                                <td>{{$order->updated_at}}</td>
                                <td>
                                    <a href="process_order_{{$order->id}}" class="btn btn-vimeo btn-sm">
                                        Process Order
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.nav-tabs-custom -->



        </section>
        <!-- /.Left col -->


    </div>
    <!-- /.row (main row) -->

</section>
@stop
