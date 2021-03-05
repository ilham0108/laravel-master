<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('stisla/dist/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('stisla/dist/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('stisla/dist/assets/css/components.css')}}">

    @livewireStyles
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
                @include('layouts.partials.stisla.topnav')
            <div class="main-sidebar sidebar-style-2">
                @include('layouts.partials.stisla.sidebar')
            </div>
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                @include('layouts.partials.stisla.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ url('stisla/dist/assets/modules/jquery.min.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/modules/popper.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/modules/tooltip.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/modules/moment.min.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ url('stisla/dist/assets/js/scripts.js')}}"></script>
    <script src="{{ url('stisla/dist/assets/js/custom.js')}}"></script>
    @livewireScripts
</body>

</html>