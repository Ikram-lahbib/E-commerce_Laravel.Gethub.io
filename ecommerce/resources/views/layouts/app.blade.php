<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BookTime</title>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script type="text/javascript" src="{{asset('ass/js/jquery-2.2.3.min.js')}}"></script>
    <!--// Common Js -->
    <!--search-bar-agileits-->
    <script src="js/main.js"></script>
    <!--//search-bar-agileits-->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('ass/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('ass/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- Banner Responsive slider -->
    <script src="{{asset('ass/js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 3
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsive slider -->
    <!-- flexSlider -->
    <script defer src="{{asset('ass/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
    <!-- stats -->
    <script src="{{asset('ass/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('ass/js/jquery.countup.js')}}"></script>
    <script>
        $('.counter-agileits-w3layouts').countUp();
    </script>
    <!-- //stats -->
    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>


    <script src="{{asset('ass/js/bootstrap.js')}}"></script>


    <!--// Required Scripts -->
    <!-- // Meta Tags -->
    <!-- // Meta Tags -->
    <link href="{{asset('ass/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('ass/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('ass/css/flexslider.css')}}" type="text/css" media="screen" property="" />
    <!--testimonial flexslider-->
    <link href="{{asset('ass/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--fonts-->
    <link href="{{asset('ass/fonts.googleapis.com/css?family=Lato:300,400,700,900')}}" rel="stylesheet">
    <link href="{{asset('ass/fonts.googleapis.com/css?family=Raleway:300,400,500,600,800')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'BookTime') }}</title>-->

    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
    <div id="app">
        @include('partials.header')
        

        @yield('content')

        @include('partials.footer')
    </div>
     @yield('javascripts')
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
</body>
</html>
