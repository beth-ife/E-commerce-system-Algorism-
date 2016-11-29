@extends('admin/admin_layout')
@section('title')
Add Product
@stop
@section('page_name')
New
@stop
@section('content')
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">New Product</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product name</label>
                            <input  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input  class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">&#8358;</span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product Image</label>
                            <input type="file" id="exampleInputFile">

                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                       
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add Product</button>
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
