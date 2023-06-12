<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - OKC</title>
        <link rel="icon" type="image/ico" href="{{ asset('images/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('assets/lte_3/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lte_3/plugins/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lte_3/plugins/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lte_3/plugins/lobibox/dist/css/lobibox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lte_3/plugins/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
        @yield("links")
    </head>
    <body class="sidebar-mini text-sm">
        <div class="wrapper">
            @include("themes/lte3/header")
            @include("themes/lte3/aside")
            <div class="content-wrapper">
                <section class="content-header">
                    @yield("breadcrumb")
                </section>
                <section class="content">
                    <div class="container-fluid">
                        @yield("content")
                    </div>
                </section>
            </div>
        </div>
        @include("themes/lte3/modal-password")
        <script src="{{ asset('assets/lte_3/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/sparklines/sparkline.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('assets/lte_3/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/lobibox/dist/js/lobibox.min.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/lte_3/plugins/jquery-number/jquery.number.min.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/event.js') }}"></script>
        @routes
        <script>
            let csrf_token = '{{ csrf_token() }}';

            seleccionarMenu(window.location);
        </script>
        <script src="{{ asset('js/password.js') }}"></script>
        @yield("scripts")
    </body>
</html>