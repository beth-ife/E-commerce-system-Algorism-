<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="
              Cherry's Fashion Store, 
              E-commerce Store, 
              " />
        <title>Cherry's World:: @yield('title')</title>
        <link href="{{ asset('css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"> 
        <!--//theme-style-->

        <script type="application/x-javascript"> 
            addEventListener("load", function() { 
            setTimeout(hideURLbar, 0); }, false); 
            function hideURLbar(){ window.scrollTo(0,1); 
            } 
        </script>

        <!-- start menu -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/simpleCart.min.js')}}"></script>
        <script src="{{ asset('js/myCart.js')}}"></script>

        <script src="{{ asset('js/responsiveslides.min.js')}}"></script>
        <!-- slide -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
$(function () {
    $("#slider").responsiveSlides({
        auto: false,
        speed: 500,
        namespace: "callbacks",
        pager: true,
    });
});
        </script>
        <!-- animation-effect -->

        <script src="{{ asset('js/wow.min.js')}}"></script>

        <script>
new WOW().init();
        </script>
        <!-- //animation-effect -->
    </head>
    <body>
        <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                        <h1><a href="/">Cherry's <span>World</span></a></h1>	
                    </div>
                    <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                        <div class="cart box_1">
                            <a href="/view_cart">
                                <h3> <div class="total">
                                        <span class="simpleCart_total"></span></div>
                                    <img src="images/cart.png" alt=""/></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                        </div>
                    </div>
                    @if(!empty ($store))
                    <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                        <span><i class="glyphicon glyphicon-phone"></i>{{$store->phone}}</span>

                    </div>
                    @endif
                    <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                            <i class="glyphicon glyphicon-search"> </i> 
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="container">
                <div class="head-top">
                    <div class="n-avigation">

                        <nav class="navbar nav_bottom" role="navigation">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>
                            </div> 

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav nav_1">
                                    <li><a href="/">Home</a></li>

                                    <li><a href="#">Products</a></li>
                                    
                                    @if(Session::has('user'))
                                    <li><a id="sign-out" href="#">Sign Out</a></li>
                                    @else
                                    <li><a href="/login">Sign In</a></li>
                                    @endif
                                    <li class="last"><a href="#">Contact</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </nav>
                    </div>


                    <div class="clearfix"> </div>
                    <!---pop-up-box---->   
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                    <div id="small-dialog" class="mfp-hide">
                        <div class="search-top">
                            <div class="login">
                                <form action="#" method="post">
                                    <input type="submit" value="">
                                    <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = '';
                                            }">		

                                </form>
                            </div>
                            <p>	Shopping</p>
                        </div>				
                    </div>
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

                        });
                    </script>			
                    <!---->		
                </div>
            </div>
        </div>


        <!-- Main Page Content-->
        @yield('content')



        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
                        <h3>Follow Us On</h3>
                        <div class="social-icons">
                            <ul class="social">
                                @if(!empty ($store))
                                <li><a href="#"><i></i></a> </li>
                                <li><a href="http://facebook.com/{{$store->facebook}}"><i class="facebook"></i></a></li>	
                                <li><a href="#"><i class="google"></i> </a></li>
                                <li><a href="#"><i class="linked"></i> </a></li>
                                @endif
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
                        <h3>Newsletter</h3>
                        <form action="#" method="post">
                            <input type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '';
                                    }">
                            <input class="btn btn-default btn-lg" type="button" value="SUBSCRIBE">
                        </form>
                    </div>
                    <div class="clearfix"> </div>	
                </div>	
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                        <h6>Categories 
                            <input type="hidden" id="session" value="{{Session::get('user')}}" style="display: block">
                        </h6>
                        <ul>
                            @if(!empty ($all_categories))
                            @foreach($all_categories as $cat)
                            <li><a href="#">{{$cat->category_name}}</a></li>
                            @endforeach
                            @endif

                        </ul>
                    </div>


                    <div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
                        <h6>Our Address</h6>
                        <ul>
                            @if(!empty($store))
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : {{$store->address}} <span>Nigeria.</span></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:{{$store->email}}">{{$store->email}}</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : {{$store->phone}}</li>
                            @endif
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                    <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Copyright © 2016 @if(!empty($store)) {{$store->name}}@endif . All Rights Reserved  </p>
                </div>
            </div>
        </div>
        <!--footer-->
        <script>
            $('#sign-out').click(function () {
                localStorage.clear();
                sessionStorage.clear();
                $.ajax({
                            type: 'GET',
                            url : '/logout',
//                            data:{rating: rating},
                            success: location.reload(),
                            error: console.log('error')
                        });
            });

            if (sessionStorage.getItem('user')) {
                localStorage.setItem('user', sessionStorage.getItem('user'));
            } else if (localStorage.getItem('user')) {
                sessionStorage.setItem('user', localStorage.getItem('user'));
            } else {
                sessionStorage.setItem('user', $('#session').val());
            }
            console.log(sessionStorage.getItem('user'));
        </script>
    </body>
</html>