<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Kelurahan'}}</title>

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
    {{-- main css file --}}
    <link rel="stylesheet" href="{{ asset('/css') }}/style.css">
    <link rel="stylesheet" href="{{ asset('/css') }}/article.css">
    {{-- Main JS File --}}
    <script src="{{ asset('/js') }}/main.js"></script>

    {{-- SLIDER --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />


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

    {{-- UMKM --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

</body>

</html>