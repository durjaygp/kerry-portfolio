<!DOCTYPE html>
<html dir="ltr" data-color="red" class="data_color">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title_meta')

    <link rel="shortcut icon"  href="{{ asset(setting()->fav_icon) }}">

    <!-- Bootstrap Css -->
    <link id="bootstrap" rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/bootstrap.min.css">

    <!-- Materialdesign icons Css -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/materialdesignicons.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/owl.carousel.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/animate.min.css">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">
    <!-- Mobirise icons Css -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/mobiriseicons.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet"  href="{{ asset('assets') }}/css/style.css">
</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

    <!-- Start Navbar -->
    @include('website.inc.header')
    <!-- End Navbar -->

    @yield('content')

    <!--START FOOTER-->
    @include('website.inc.footer')
    <!--END FOOTER-->
    <!-- End all Cards -->

    <!-- Back To Top -->
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- Dark and RTL Button -->
    <div class="position-fixed start-0 translate-middle-y rounded-start-2 z-3" style="top: 244px;">
        <div id="color-switcher" class="bg-body">
            <div>
                <h3 class="text-center fw-bold text-body">Select your color</h3>
                <ul class="pattern">
                    <li>
                        <a class="color1 active" data-color="red" href="#"></a>
                    </li>
                    <li>
                        <a class="color2" href="#" data-color="sky"></a>
                    </li>
                    <li>
                        <a class="color3" href="#" data-color="green"></a>
                    </li>
                    <li>
                        <a class="color4" href="#" data-color="blue"></a>
                    </li>
                    <li>
                        <a class="color5" href="#" data-color="skyblue"></a>
                    </li>
                    <li>
                        <a class="color6" href="#" data-color="yellow"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="#" class="settings"><i class="mdi mdi-palette"></i></a>
            </div>
        </div>

        <button type="button" class="border-0 dark-light-btn rounded-0 rounded-end-2 fs-5 d-flex align-items-center justify-content-center" id="dataTheme"><i class="mdi mdi-weather-night"></i> <i class="mdi mdi-weather-sunny"></i></button>

{{--        <button type="button" class=" border-0 rtl-ltr-btn rounded-0 rounded-end-2 fs-14 d-flex align-items-center justify-content-center text-cnter" id="theme_Rtl_Ltr"></button>--}}
    </div>

    <!--All Javascript -->
    <script  src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script  src="{{ asset('assets') }}/js/jquery.min.js"></script>

    <!-- Text Type -->
    <script  src="{{ asset('assets') }}/js/typed.umd.js"></script>

    <!-- Owl Carousel -->
    <script  src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>

    <!-- Contact Js -->
    <script  src="{{ asset('assets') }}/js/contact.js"></script>

    <!-- Swicher js -->
    <script  src="{{ asset('assets') }}/js/swicher.js"></script>

    <!-- Work Filter -->
    <script  src="{{ asset('assets') }}/js/isotope.js"></script>

    <!-- Magnific Popup Js -->
    <script  src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
    <!-- Custom Js -->
    <script  src="{{ asset('assets') }}/js/custom.js"></script>
    @yield('script')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position:'topRight',
                    message: '{{$error}}',
                });
            </script>
        @endforeach

    @endif

    @if(session()->get('success'))
        <script>
            iziToast.success({
                title: '',
                position:'topRight',
                message: '{{session()->get('success')}}',
            });

        </script>
    @endif
</body>
</html>
