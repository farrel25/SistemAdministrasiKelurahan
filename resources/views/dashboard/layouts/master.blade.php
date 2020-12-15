<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="https://kit.fontawesome.com/95e7b49a0c.js" crossorigin="anonymous"></script>
    <script src="http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set"></script>
    <title>Kelurahan - Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">

    {{-- <link href="./main.css" rel="stylesheet"> --}}
    <link href="{{ asset('/admin') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/helper.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('dashboard.layouts.navbar')
        <div class="app-main">
            @include('dashboard.layouts.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/admin') }}/js/main.js"></script>
</body>

</html>