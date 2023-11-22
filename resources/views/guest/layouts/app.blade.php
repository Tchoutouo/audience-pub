<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="{{ url('assets/images/AudiengePublogo.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta name="google-site-verification" content="oxmtYQW3E_SgY_u7H5XMQhXKrhWXLMHXytcO0fJ1tF8" /> --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Additional CSS Files -->
        @yield('css')

        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo-574-mexant.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

		<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/test.css')}}">

    </head>

    <body>

        @include('guest.layouts.header')

        <div id="main">
            @yield('content')
        </div>

        @include('guest.layouts.footer')

        @yield('js')
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('assets/js/isotope.min.js')}}"></script>
        <script src="{{asset('assets/js/owl-carousel.js')}}"></script>

        <script src="{{asset('assets/js/tabs.js')}}"></script>
        <script src="{{asset('assets/js/swiper.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

        {{-- footer js --}}
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

        <script>
            var interleaveOffset = 0.5;

            var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
                }
                },
                touchStart: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
                },
                setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
                }
                }
            }
            };

            var swiper = new Swiper(".swiper-container", swiperOptions);

        </script>

    </body>

</html>
