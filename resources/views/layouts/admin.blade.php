<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
    @include('partials.navbar')

    @include('partials.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.pageheader')
        <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

{{--    <!-- Control Sidebar -->--}}
{{--    <aside class="control-sidebar control-sidebar-dark">--}}
{{--        <!-- Control sidebar content goes here -->--}}
{{--    </aside>--}}
    <!-- /.control-sidebar -->

        @include('partials.footer')
</div>
<!-- ./wrapper -->

@include('partials.scripts')
</body>
</html>
