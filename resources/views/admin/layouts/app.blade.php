<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/images/favicon.ico') }}">
    <link href="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/css/app.min.css') }}" id="app-style" rel="stylesheet"
        type="text/css" />
    @yield('css')
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        @include('admin.partials.header')
        @include('admin.partials.sidebar')
        <div class="main-content">
            @yield('content')
            @include('admin.partials.footer')
        </div>
    </div>

    @include('admin.partials.customize-sidebar')
    <div class="rightbar-overlay"></div>

    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset(env('ADMIN_ASSETS_URL') . 'assets/admin/js/app.js') }}"></script>
    @yield('js')
</body>

</html>
