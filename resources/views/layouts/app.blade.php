<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$title ?? "Kuroyasha"}} - {{env('APP_NAME')}}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/Kuro.png')}}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/findash/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('assets/findash/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/findash/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/findash/css/responsive.css')}}">
    <!-- Full calendar -->
    <link href='{{asset('assets/findash/fullcalendar/core/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('assets/findash/fullcalendar/daygrid/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('assets/findash/fullcalendar/timegrid/main.css')}}' rel='stylesheet'/>
    <link href='{{asset('assets/findash/fullcalendar/list/main.css')}}' rel='stylesheet'/>

    <link rel="stylesheet" href="{{asset('assets/findash/css/flatpickr.min.css')}}">

    @stack('css')
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.sidebar')
    <!-- TOP Nav Bar -->
    @include('layouts.navbar')
    <!-- TOP Nav Bar END -->

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <x-breadcrumb :breadcrumb="$breadcrumb ?? []"/>
        @if($errors->any())
            <x-error-alert :$errors/>
        @endif
        @if (Session::has('success'))
            <x-success-alert>{{session('success')}}</x-success-alert>
        @endif
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
@include('layouts.footer')
<!-- Footer END -->

{{-- JQuery --}}
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/findash/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/findash/js/popper.min.js')}}"></script>
<script src="{{asset('assets/findash/js/bootstrap.min.js')}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset('assets/findash/js/jquery.appear.js')}}"></script>
<!-- Countdown JavaScript -->
<script src="{{asset('assets/findash/js/countdown.min.js')}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset('assets/findash/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/findash/js/jquery.counterup.min.js')}}"></script>
<!-- Wow JavaScript -->
<script src="{{asset('assets/findash/js/wow.min.js')}}"></script>
<!-- Apexcharts JavaScript -->
<script src="{{asset('assets/findash/js/apexcharts.js')}}"></script>
<!-- Slick JavaScript -->
<script src="{{asset('assets/findash/js/slick.min.js')}}"></script>
<!-- Select2 JavaScript -->
<script src="{{asset('assets/findash/js/select2.min.js')}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset('assets/findash/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset('assets/findash/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{asset('assets/findash/js/smooth-scrollbar.js')}}"></script>
<!-- lottie JavaScript -->
<script src="{{asset('assets/findash/js/lottie.js')}}"></script>
<!-- am core JavaScript -->
<script src="{{asset('assets/findash/js/core.js')}}"></script>
<!-- am charts JavaScript -->
<script src="{{asset('assets/findash/js/charts.js')}}"></script>
<!-- am animated JavaScript -->
<script src="{{asset('assets/findash/js/animated.js')}}"></script>
<!-- am kelly JavaScript -->
<script src="{{asset('assets/findash/js/kelly.js')}}"></script>
<!-- am maps JavaScript -->
<script src="{{asset('assets/findash/js/maps.js')}}"></script>
<!-- am worldLow JavaScript -->
<script src="{{asset('assets/findash/js/worldLow.js')}}"></script>
<!-- Raphael-min JavaScript -->
<script src="{{asset('assets/findash/js/raphael-min.js')}}"></script>
<!-- Morris JavaScript -->
<script src="{{asset('assets/findash/js/morris.js')}}"></script>
<!-- Morris min JavaScript -->
<script src="{{asset('assets/findash/js/morris.min.js')}}"></script>
<!-- Flatpicker Js -->
<script src="{{asset('assets/findash/js/flatpickr.js')}}"></script>
<!-- Style Customizer -->
<script src="{{asset('assets/findash/js/style-customizer.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/findash/js/chart-custom.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('assets/findash/js/custom.js')}}"></script>

@stack('js')

</body>
</html>
