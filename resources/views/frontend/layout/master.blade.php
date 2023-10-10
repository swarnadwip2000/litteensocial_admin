<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dostart - Startup Landing Page">
 @yield('meta_title')
    <!-- ========== Page Title ========== -->
    <title>Lit Teen Social & Adventures | @yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('frontend_assets/css/bootstrap.min.') }}css" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/font-awesome.min.') }}css" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style type="text/css">
        .mail-wrap {
            width: 240px;
            margin: 0 auto;
        }
    </style>
     @stack('styles')


</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
<!-- Header
    ============================================= -->
    @include('frontend.includes.header')
    <!-- End Header -->
    @yield('content')


    <!-- Start Footer
    ============================================= -->
    @include('frontend.includes.footer')




    <!-- Start Google Maps
    ============================================= -->

    <!-- End Google Maps -->



    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('frontend_assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.appear.') }}js"></script>
    <script src="{{ asset('frontend_assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/count-to.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    @stack('scripts')
</body>

</html>
