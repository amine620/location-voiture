<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>Cardoor - Car Rental HTML Template</title>
 <!--=== Bootstrap CSS ===-->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<!--=== Animate CSS ===-->
<link href="{{asset('assets/css/plugins/animate.css')}}" rel="stylesheet">
<!--=== Vegas Min CSS ===-->
<link href="{{asset('assets/css/plugins/vegas.min.css')}}" rel="stylesheet">
<!--=== Slicknav CSS ===-->
<link href="{{asset('assets/css/plugins/slicknav.min.css')}}" rel="stylesheet">
<!--=== Magnific Popup CSS ===-->
<link href="{{asset('assets/css/plugins/magnific-popup.css')}}" rel="stylesheet">
<!--=== Owl Carousel CSS ===-->
<link href="{{asset('assets/css/plugins/owl.carousel.min.css')}}" rel="stylesheet">
<!--=== Gijgo CSS ===-->
<link href="{{asset('assets/css/plugins/gijgo.css')}}" rel="stylesheet">
<!--=== FontAwesome CSS ===-->
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
<!--=== Theme Reset CSS ===-->
<link href="{{asset('assets/css/reset.css')}}" rel="stylesheet">
<!--=== Main Style CSS ===-->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!--=== Responsive CSS ===-->
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
 <!--=======================end css============================-->



   </head>
<body class="loader-active">
     <!--== Preloader Area Start ==-->
     <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== navbar ==-->
    @include('partials.navbar')
  
    @yield('content')
    
 <!--=======================Javascript============================-->
  <!--=== Jquery Min Js ===-->
  <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
  <!--=== Jquery Migrate Min Js ===-->
  <script src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
  <!--=== Popper Min Js ===-->
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!--=== Gijgo Min Js ===-->
  <script src="{{asset('assets/js/plugins/gijgo.js')}}"></script>
  <!--=== Vegas Min Js ===-->
  <script src="{{asset('assets/js/plugins/vegas.min.js')}}"></script>
  <!--=== Isotope Min Js ===-->
  <script src="{{asset('assets/js/plugins/isotope.min.js')}}"></script>
  <!--=== Owl Caousel Min Js ===-->
  <script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
  <!--=== Waypoint Min Js ===-->
  <script src="{{asset('assets/js/plugins/waypoints.min.js')}}"></script>
  <!--=== CounTotop Min Js ===-->
  <script src="{{asset('assets/js/plugins/counterup.min.js')}}"></script>
  <!--=== YtPlayer Min Js ===-->
  <script src="{{asset('assets/js/plugins/mb.YTPlayer.js')}}"></script>
  <!--=== Magnific Popup Min Js ===-->
  <script src="{{asset('assets/js/plugins/magnific-popup.min.js')}}"></script>
  <!--=== Slicknav Min Js ===-->
  <script src="{{asset('assets/js/plugins/slicknav.min.js')}}"></script>

  <!--=== Mian Js ===-->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>