<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font/flaticon.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css')}}">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.css')}}">
     <!-- Magnific Popup CSS -->
     <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- Elements CSS -->
    <link rel="stylesheet" href="{{ asset('css/elements.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styleCSS/style.css')}}">

  <!-- Nivo slider CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/slider/css/nivo-slider.css')}}" />

  <!-- Slick Caousel CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css')}}">

     <!-- Nouislider Style CSS -->
     <link rel="stylesheet" href="{{ asset('vendor/noUiSlider/nouislider.min.css')}}">
     @yield('style')
  <!-- Modernizr Js -->
  <script src="{{ asset('js/modernizr-3.5.0.min.js')}}"></script>
    </head>
    <body style="background: #E9E9E9 0% 0% no-repeat padding-box;">
        <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="content-wrapper" style="background: #E9E9E9 0% 0% no-repeat padding-box;">
                @yield('header')
            
                @yield('content')

                @yield('footer')
        </div>

      
  <!-- jquery-->
  <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
  <!-- Plugins js -->
  <script src="{{ asset('js/plugins.js')}}"></script>
  <!-- Popper js -->
  <script src="{{ asset('js/popper.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <!-- Counterup Js -->
  <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
  <!-- WOW JS -->
  <script src="{{ asset('js/wow.min.js')}}"></script>
  <!-- Waypoints Js -->
  <script src="{{ asset('js/waypoints.min.js')}}"></script>
  <!-- Parallaxie Js -->
  <script src="{{ asset('js/parallaxie.js')}}"></script>
  <!-- Nivo slider js -->
  <script src="{{ asset('vendor/slider/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{ asset('vendor/slider/home.js')}}"></script>
  <!-- Owl Carousel Js -->
  <script src="{{ asset('vendor/OwlCarousel/owl.carousel.min.js')}}"></script>
  <!-- Meanmenu Js -->
  <script src="{{ asset('js/jquery.meanmenu.min.js')}}"></script>
  <!-- Magnific Popup Js -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
  <!-- Imagesloaded Js -->
  <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Select2 Js -->
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <!-- Datetimepicker Js -->
  <script src="{{ asset('js/jquery.datetimepicker.full.min.js')}}"></script>
  <!-- Isotope Js -->
  <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
  <!-- Slick Cauosel JS -->
  <script src="{{ asset('vendor/slick/slick.min.js')}}"></script>

  <!-- Smoothscroll Js -->
  <script src="{{ asset('js/smoothscroll.min.js')}}"></script>

  <!-- Google Map js -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDEzfE-vDZZfN0nCeQa1JTcn9SDici0uU"></script> --}}
  <!-- Nouislider Js -->
  <script src="{{ asset('vendor/noUiSlider/nouislider.min.js')}}"></script>
  <!-- wNumb Js -->
  <script src="{{ asset('js/wNumb.js')}}"></script>
  
  <script src="{{asset('js/validator.min.js')}}"></script>
 <!-- Custom Js -->
 <script src="{{ asset('js/main.js')}}"></script>

 <script src="{{ asset('vendor/noUiSlider/nouislider.min.js')}}"></script>
    </body>
</html>
