<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artistry Avenue-Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/frontend/img/logo.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/backend/css/styles.min.css')}}" />
</head>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
                <!-- sidebar start -->
                @include('backend.body.sidebar')
                <!-- sidebar end -->

                <!-- header start -->
                @include('backend.body.header')
                <!-- header end -->

                <!-- main content start -->
                @yield('content')
                <!-- main content end -->
</div>
    </div>
    </div>
    <script src="{{asset('assets/backend/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('assets/backend/js/app.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/simplebar/dist/simplebar.js')}}"></script>
    <script src="{{asset('assets/backend/js/dashboard.js')}}"></script>
</body>

</html>