<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Kelurahan'}}</title>

    {{-- Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- Vendor CSS files --}}
    <link rel="stylesheet" href="{{ asset('/vendor') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/icofont/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/remixicon/remixicon.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/venobox/venobox.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/aos/aos.css">

    {{-- main css file --}}
    <link rel="stylesheet" href="{{ asset('/css') }}/style.css">

</head>

<body>
    <!-- Start Header -->
    @include('visitors.layouts.navigation')
    <!-- End Header -->

    @yield('content')

    {{-- Vendor js files --}}
    <script src="{{ asset('/vendor') }}/jquery/jquery.min.js"></script>
    <script src="{{ asset('/vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/vendor') }}/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('/vendor') }}/php-email-form/validate.js"></script>
    <script src="{{ asset('/vendor') }}/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('/vendor') }}/counterup/counterup.min.js"></script>
    <script src="{{ asset('/vendor') }}/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('/vendor') }}/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/vendor') }}/venobox/venobox.min.js"></script>
    <script src="{{ asset('/vendor') }}/aos/aos.js"></script>

    {{-- Main JS File --}}
    <script src="{{ asset('/js') }}/main.js"></script>
</body>

</html>
