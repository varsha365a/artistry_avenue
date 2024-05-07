<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
</head>

<body>
                <!-- header start -->
                @include('frontend.body.header')
                <!-- header end -->

                <!-- main content start -->
                @yield('content')
                <!-- main content end -->

                <!-- footer start -->
                @include('frontend.body.footer')
                <!-- footer end -->

 <!-- jquery plugins here-->
 <script src="{{asset('assets/frontend/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- magnific popup js -->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.js')}}"></script>
    <!-- carousel js -->
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/js/contact.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
</body>

</html>