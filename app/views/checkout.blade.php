@extends('layout')
@section('title')
Home
@stop
@section('content')
<!--<div class="simpleCart_checkout pull-right"><a class="btn btn-lg btn-warning" href="javascript:;" >Proceed To Checkout</a></div>-->
<div class="simpleCart_items">

</div>
<div class="row">
    <div class="col-lg-2">
        <!--<div class="pull-right">Grand Total:</div>-->
    </div>
    <div class="col-lg-8 g_total">
        <div class=" simpleCart_grandTotal pull-right"></div>
    </div>
</div>

<div class="row simpleCart_checkout pull-right">
    <a class="btn btn-lg btn-warning" href="javascript:;" >Proceed To Checkout</a>
</div>

@stop

