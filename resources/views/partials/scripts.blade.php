<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
@include('partials.toastr')
@yield('scripts')


<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
{{--<script src="plugins/raphael/raphael.min.js"></script>--}}
{{--<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>--}}
{{--<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>--}}
{{--<!-- ChartJS -->--}}
{{--<script src="plugins/chart.js/Chart.min.js"></script>--}}
