<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="https://kit.fontawesome.com/95e7b49a0c.js" crossorigin="anonymous"></script>
    <script src="http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set"></script>
    <title>{{ $title ?? 'Dashboard'}}</title>

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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="position-relative form-group m-5">
                <label for="#" class="">Status</label>
                <select name="#" id="#" class="mb-2 form-control" value="#">
                    <option>Pilih...</option>
                    <option value="#"></option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</html>