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
                {{ Form::open(array('url'=>'add-product','files'=>true)) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="product_title">Product name</label>
                        <input  class="form-control" required="" id="product_title" name="product_title" placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control" required="" name="description" id="description" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Product Category</label>
                        <select  class="form-control" required="" name="category" id="category" placeholder="Category">
                            @foreach($all_categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <!--<label for="price">Price</label>-->
                        <span class="input-group-addon">&#8358;</span>
                        <input required="" type="text" name="price" placeholder="price" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Images
                        </label>
                        <div id="warning" style="display:none" class="alert alert-warning">Image too heavy, please choose another one.</div>
                        <div class="form-group">
                            <input class="product_image" type="file" accept=".jpg, .jpeg, .png, .gif" a required="" name="product_image_1" id="product_image_1">
                            <br>

                        </div>
                        <div class="form-group">
                            <input class="product_image" type="file" required="" name="product_image_2" id="product_image_2">
                        </div>
                        <div class="product_image" class="form-group">
                            <input type="file" required="" name="product_image_3" id="product_image_3">
                        </div>
                        <!--<p class="help-block">Example block-level help text here.</p>-->
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
                {{ Form::close() }}
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->

    </div>
    @section('last_scripts')
    <script>
        $('.product_image').click(function () {
            $('#warning').fadeOut();
        });
        $('.product_image').bind('change', function () {
            if (parseInt(this.files[0].size) > 100000) {
                this.setAttribute('type', 'text');
                this.setAttribute('type', 'file');
                $('#warning').fadeIn();
            }

        });
    </script>
    @stop
    <!-- /.row -->
</section>
@stop
