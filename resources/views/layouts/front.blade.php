<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    {{--<meta http-equiv="refresh" content="1">--}}
    <title>{{ isset($title) ? $title.' -' : '' }} Officers' Election Portal</title>


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @stack('styles')
    @stack('scripts-first')
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    @include('partials.frontnav')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
{{--        <div class="content-header">--}}
{{--            <div class="container">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>--}}
{{--                    </div><!-- /.col -->--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item"><a href="#">Layout</a></li>--}}
{{--                            <li class="breadcrumb-item active">Top Navigation</li>--}}
{{--                        </ol>--}}
{{--                    </div><!-- /.col -->--}}
{{--                </div><!-- /.row -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </div>--}}
        <!-- /.content-header -->

        <div class="content">
            @yield('content')
        </div>


    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
{{--    <footer class="main-footer ">--}}
{{--        <div class="text-dark" style="background-color: #ffffff">--}}
{{--            <strong class="pull-left">&copy; ICT Cell</strong>--}}
{{--            <div class="float-right">Election Commission</div>--}}

{{--            <span style="font-size: 8pt">In Association With</span> Shahjalal University Officer Association--}}

{{--            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>--}}
{{--        </div>--}}
{{--        <!-- To the right -->--}}
{{--        <div class="float-right">--}}
{{--            <strong>Powered By <br><a href=" {{route('public.commission')}}">Election Commission 2021</a> & SUOA<a href="#"></a>.</strong>--}}
{{--        </div>--}}
{{--        <!-- Default to the left -->--}}
{{--        <strong>Copyright &copy; 2021-{{ Date('Y') }} <a href="#">ICT Cell</a> In Association With <a href="#">Election Commission</a>.</strong> & SUOA--}}

{{--        <strong class="text-center">--}}
{{--            Powered By <a href="#">ICT Cell, SUST</a> &--}}
{{--            <a href=" {{route('public.commission')}}">Election Commission 2021</a> <br> In Associaton With <a href="#">SUOA</a>--}}
{{--        </strong>--}}
{{--    </footer>--}}
    @include('partials.footer2')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

@stack('scripts')
</body>
</html>
