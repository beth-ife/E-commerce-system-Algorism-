@extends('layout')
@section('title')
Successs
@stop
@section('content')
<div>
    <div class="alert alert-success">
        <p>Thanks a lot for shopping with us! Your order has been placed. 
            
        </p>
        <p>Your order tracking code is {{$order_id}} <b></b></p>
    </div>
</div>
@stop
