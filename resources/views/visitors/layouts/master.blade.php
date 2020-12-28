<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Kelurahan' }}</title>


    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/95e7b49a0c.js" crossorigin="anonymous"></script>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <script src="{{ asset('/visitors/vendor') }}/jquery/jquery.min.js"></script>
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



    {{-- Chart.js --}}
    <script src="{{ asset('/visitors/vendor') }}/chart/Chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/chart/Chart.min.css">

    {{-- main css file --}}
    <link rel="stylesheet" href="{{ asset('/visitors/css') }}/style.css">

    {{-- Main JS File --}}
    <script src="{{ asset('/visitors/js') }}/main.js"></script>


</head>

<body>
    @include('sweetalert::alert')
    <!-- Start Header -->
    @include('visitors.layouts.navigation')
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer -->
    {{-- Chart.js --}}
    <script src="{{ asset('/visitors/vendor') }}/chart/Chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/visitors/vendor') }}/chart/Chart.min.css">
    {{-- Main JS File --}}
    <script src="{{ asset('/visitors/js') }}/main.js"></script>

    @include('visitors.layouts.footer')
    <!-- End Footer -->

</body>

</html>
