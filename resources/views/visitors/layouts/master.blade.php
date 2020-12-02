<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Kelurahan'}}</title>

    {{-- Icon --}}
    <script src="https://kit.fontawesome.com/95e7b49a0c.js" crossorigin="anonymous"></script>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Vendor CSS files --}}
    <link rel="stylesheet" href="{{ asset('/vendor') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/icofont/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/remixicon/remixicon.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/venobox/venobox.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/aos/aos.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/article/article.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('/vendor') }}/slick/slick.css">

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
    <script src="{{ asset('/vendor') }}/slick/slick.min.js"></script>

    {{-- main css file --}}
    <link rel="stylesheet" href="{{ asset('/css') }}/style.css">

    {{-- Main JS File --}}
    <script src="{{ asset('/js') }}/main.js"></script>
</head>

<body>
    <!-- Start Header -->
    @include('visitors.layouts.navigation')
    <!-- End Header -->

    @yield('content')



    {{-- Main JS File --}}
    <script src="{{ asset('/js') }}/main.js"></script>


</body>

</html>