@extends('layout')
@section('title')
Product
@stop
@section('content')
<div class="single">

    <div class="container">
        <div class="col-md-9">

            <div class="col-md-5 grid">		
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($images as $image)


                        <li data-thumb="images/{{$image->image}}">


                            <div  class="thumb-image">

                                <img class="img-responsive" src="images/{{$image->image}}" 
                                     data-imagezoom="true" 
                                     > 

                            </div>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-7 single-top-in">
                <div class="single-para simpleCart_shelfItem">

                    <img style="display: none" class="item_thumb" src="images/{{ $images{0}->image }}"> 

                    <h2 class="add-to item_name">{{$product->title}}</h2>
                    <p>{{$product->description}}</p>
                    <div class="star-on">
                        <ul>
                            @for($i=1; $i<= intval($product->rating); $i++)
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            @endfor
                            @if(intval($product->rating)!=5)
                            @for($i=1; $i<=5-( intval($product->rating)); $i++)
                            <li><a href="#"><i class="glyphicon glyphicon-star-empty"> </i></a></li>
                            @endfor
                            @endif

                        </ul>
                        <div class="review">
                            <a href="#">Based on 3 reviews </a> ---
                            @if(Session::has('user'))
                            <a href="#"  data-toggle="modal" data-target="#rate-product">Rate product</a>
                            <input type='hidden' value="{{Session::get('user_id')}}" id="cust_id"/>
                            <input type='hidden' value="{{$product->id}}" id="p_id"/>
                            @else
                            <a href="/login">Sign in to rate product.</a>
                            @endif
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <label  class="add-to item_price">&#8358;{{$product->price}}</label>

                    <div class="available">
                        <!--<h6>Available In :</h6>-->
                        <ul>

                            <li>Available In: <select class="form-control">
                                    @foreach($sizes as $size)
                                    <option>{{$size->size}}</option>
                                    @endforeach
                                </select></li>

                        </ul>
                    </div>
                    <a href="#" class="cart item_add">Add to Cart</a>
                </div>
            </div>

            <div class="clearfix"> </div>
           
        </div>
        <!----->
        <div class="col-md-3 product-bottom">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Categories</h3>
                <ul class="menu-drop">
                    @foreach($all_categories as $cat)
                    <li class="item1"><a href="#">{{$cat->category_name}}</a>

                    </li>
                    @endforeach
                </ul>
            </div>

            <!--initiate accordion-->
            <script type="text/javascript">
                $(function () {
                    var menu_ul = $('.menu-drop > li > ul'),
                            menu_a = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function (e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!--//menu-->


        </div>
        <div class="clearfix"> </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="rate-product" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rate product: {{$product->title}}</h4>
                </div>
                <div class="modal-body">
                    <div class="star-on">
                        <ul>
                            <li>Rating: </li>
                            @for($i=1; $i<=5; $i++)
                            <li><a href="#"><i id="star_{{$i}}" class="glyphicon glyphicon-star-empty rating"> </i></a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>










    <!-- slide -->
    <script src="js/jquery.min.js"></script>
    <script src="js/imagezoom.js"></script>
    <!-- start menu -->
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>$(document).ready(function () {
                    $(".memenu").memenu();
                });</script>
    <script src="js/simpleCart.min.js"></script>
    <!--initiate accordion-->
    <script type="text/javascript">
                $(function () {
                    var menu_ul = $('.menu-drop > li > ul'),
                            menu_a = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function (e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
    </script>
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <script>
                // Can also be used with $(document).ready()
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
    </script>
    <!---pop-up-box---->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!---//pop-up-box---->
    <script>
                $(document).ready(function () {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                    $('.rating').hover(function () {
                        id = this.id;
                        //console.log(id);
                        $('#'.id).css({
                            color: 'red !important',
                        });
                    }, function () {
                        $('#'.id).css('color', 'blue');
                    });
                    
                    //Click function
                    $('.rating').click(function(){
                        id = this.id;
                        c_id = $('#cust_id').val();
                        p_id = $('#p_id').val();
                        rating = id.charAt(id.length-1); 
                        console.log(rating);
                        $.ajax({
                            type: 'POST',
                            url : '/post-rating',
                            data:{rating: rating, customer_id:c_id, product_id:p_id},
                            success: location.reload(),
                            error: console.log('error')
                        });
                    });

                });
    </script>
</div>
@stop
