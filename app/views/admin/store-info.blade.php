@extends('admin/admin_layout')
@section('title')
Store Info
@stop
@section('page_name')
::
@stop
@section('content')
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Store Information</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="store_name">Store name</label>
                            <input  class="form-control" name="store_name" id="store_name" readonly="" 
                                    value="{{$store->store_name}}" placeholder="Enter store name">
                            <input type="hidden" value="{{$store->id}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input  class="form-control" value="{{$store->email}}" id="email" name="phone" placeholder="Enter email">
                        </div>
                       
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input value="{{$store->phone}}"  class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Enter address">{{$store->address}}</textarea>
                        </div>
                        
                        <!--Social Links-->
                        <div class="form-group">
                            <label for="instagram">Instagram (Optional)</label>
                            <input  class="form-control" value="{{$store->instagram}}" id="instagram" name="instagram" placeholder="Enter instagram handle">
                        </div>
                       <div class="form-group">
                            <label for="twitter">Twitter (Optional)</label>
                            <input  class="form-control" value="{{$store->twitter}}" id="twitter" name="twitter" placeholder="Enter twitter handle">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook (Optional)</label>
                            <input  class="form-control" value="{{$store->facebook}}" id="facebook" name="facebook" placeholder="Enter facebook name">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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
