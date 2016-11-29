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
                            <div class="thumb-image"> <img src="images/{{$image->image}}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="col-md-7 single-top-in">
                <div class="single-para simpleCart_shelfItem">
                    <h2>{{$product->title}}</h2>
                    <p>{{$product->description}}</p>
                    <div class="star-on">
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                        </ul>
                        <div class="review">
                            <a href="#"> 3 reviews </a>/
                            <a href="#">  Write a review</a>
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
                    <a href="#" class="cart item_add">More details</a>
                </div>
            </div>
           
            <div class="clearfix"> </div>
            <div class="content-top1">
                <!--Products in same category-->
                <div class="col-md-4 col-md4">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="images/pi7.png" alt="" />
                        </a>
                        <h3><a href="single.html">Jeans</a></h3>
                        <div class="price">
                            <h5 class="item_price">$300</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>	
               
                <!--//End of Products in same category-->
                <div class="clearfix"> </div>
            </div>		
        </div>
        <!----->
        <div class="col-md-3 product-bottom">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Categories</h3>
                <ul class="menu-drop">
                    <li class="item1"><a href="#">Men </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                        </ul>
                    </li>
                    <li class="item2"><a href="#">Women </a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                        </ul>
                    </li>
                    <li class="item3"><a href="#">Kids</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
                        </ul>
                    </li>
                    <li class="item4"><a href="#">Accesories</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
                        </ul>
                    </li>

                    <li class="item4"><a href="#">Shoes</a>
                        <ul class="cute">
                            <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                            <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                            <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                        </ul>
                    </li>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
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
						$(document).ready(function() {
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
																						
						});
				</script>
</div>
@stop
