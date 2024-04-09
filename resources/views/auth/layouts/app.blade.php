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
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div id="container-inside">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center bg-primary rounded">
                <div class="row m-0">

                    @yield('content')

                    <div class="col-md-7 text-center sign-in-page-image">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img
                                    src="{{asset('assets/images/Kuro.png')}}" class="img-fluid"
                                    alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                 data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                 data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="{{asset('assets/findash/images/login/1.png')}}" class="img-fluid mb-4"
                                         alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/findash/images/login/1.png')}}" class="img-fluid mb-4"
                                         alt="logo">
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/findash/images/login/1.png')}}" class="img-fluid mb-4"
                                         alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->

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
<!-- lottie JavaScript -->
<script src="{{asset('assets/findash/js/lottie.js')}}"></script>
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
<!-- Style Customizer -->
<script src="{{asset('assets/findash/js/style-customizer.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/findash/js/chart-custom.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('assets/findash/js/custom.js')}}"></script>
</body>
</html>
