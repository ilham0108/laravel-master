<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('AdminLTE-3.1.0-rc/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Laravel MIX adminlte, datatable,sweeralert2 -->
    <link rel="stylesheet" href="{{ url('css/adminlte-datatable-datatablestyle-swtalert.css') }}">

    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('layouts.partials.adminlte.topnav')
        @include('layouts.partials.adminlte.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            @include('layouts.partials.adminlte.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- Laravel MIX jQuery, adminlte. datatable, sweetalert2 -->
    <script src="{{ url('js/adminlte-datatable-datatablestyle-swtalert.js') }}"></script>

    @yield('js')
    <script>
        function info() {
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
                });
            Toast.fire({
                icon: 'info',
                title: 'Table reloaded !'
            })
        }
        
        function sukses() {
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
                });
            Toast.fire({
                icon: 'success',
                title: 'Data berhasil ditambahkan !'
            })
        }

        function sukseshapus() {
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
                });
            Toast.fire({
                icon: 'error',
                title: 'Data berhasil dihapus !'
            })
        }
    </script>
</body>

</html>