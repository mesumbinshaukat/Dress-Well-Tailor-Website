<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DressWell Tailors </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="18x18" href="{{asset('feb-Icon-2.png')}}">
    <link rel="stylesheet" href="{{asset('admintheme/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admintheme/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('admintheme/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admintheme/css/style.css')}}" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('admin.dashboard')}}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('assets/img/DWT-PROFILE-PIC-1.jpg')}}" alt="">
                <img class="logo-compact" src="{{asset('admintheme/images/text.png')}}" alt="">
                <img class="brand-title" src="{{asset('admintheme/images/text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
            @include('admin.dashlayout.headd')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!-- Sidebar -->
        @include('admin.dashlayout.side')
        <!-- End of Sidebar -->

            @yield('content')


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © DressWell &amp; Developed by <a href="#" target="_blank">Abdul Raheem</a> 2022</p>
                <p>Distributed by <a href="{{route('home')}}" target="_blank">DressWell</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admintheme/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admintheme/js/quixnav-init.js')}}"></script>
    <script src="{{asset('admintheme/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('admintheme/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admintheme/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('admintheme/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admintheme/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('admintheme/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('admintheme/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admintheme/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('admintheme/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('admintheme/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admintheme/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('admintheme/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{asset('admintheme/')}}/js/dashboard/dashboard-1.js"></script>

</body>

</html>