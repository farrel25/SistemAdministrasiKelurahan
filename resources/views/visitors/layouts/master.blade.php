<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/images') }}/logo.png">
    <title>{{ $title ?? 'Kelurahan' }}</title>

    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/95e7b49a0c.js" crossorigin="anonymous"></script>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Vendor CSS files --}}
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/icofont/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/remixicon/remixicon.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/venobox/venobox.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/aos/aos.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/slick/slick.css">

    {{-- Vendor js files --}}
    <script src="{{ asset('/visitors/vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/php-email-form/validate.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/counterup/counterup.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/venobox/venobox.min.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/aos/aos.js"></script>
    <script src="{{ asset('/visitors/vendor') }}/slick/slick.min.js"></script>

    {{-- Main CSS file --}}
    <link rel="stylesheet" href="{{ asset('/visitors/css') }}/style.css">

    {{-- Main JS File --}}
    <script src="{{ asset('/visitors/js') }}/main.js"></script>


</head>

<body>

    @include('visitors.layouts.modal')
    @include('sweetalert::alert')
    <!-- Start Header -->
    @include('visitors.layouts.navigation')
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer -->
    @include('visitors.layouts.footer')
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up scrollto"></i></a>

    {{-- Main JS File --}}
    <script src="{{ asset('/visitors/js') }}/main.js"></script>
    {{-- Chart.js --}}
    <script src="{{ asset('/visitors/vendor') }}/chart/Chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/chart/Chart.min.css">
</body>

</html>
