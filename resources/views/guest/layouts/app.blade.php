<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> --}}
        {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet"> --}}

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
