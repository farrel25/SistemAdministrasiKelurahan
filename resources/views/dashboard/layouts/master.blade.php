<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{ asset('/images') }}/logo.png">

    <script src="https://kit.fontawesome.com/95e7b49a0c.js" crossorigin="anonymous"></script>
    <script src="http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- CK editor 5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    {{-- select2.org --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <title>{{ $title ?? 'Dashboard' }}</title>

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">

    {{--
    <link href="./main.css" rel="stylesheet"> --}}
    <link href="{{ asset('/admin') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/helper.css" rel="stylesheet">

</head>

<body>
    @include('dashboard.layouts.modal')
    @include('sweetalert::alert')
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('dashboard.layouts.navbar')
        <div class="app-main">
            @include('dashboard.layouts.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                    <div class="row">
                        <div class="scrollbar-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/admin') }}/js/main.js"></script>
    <script type="text/javascript" src="{{ asset('/admin') }}/js/style.js"></script>
</body>



</html>
