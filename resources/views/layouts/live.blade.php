<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title.' -' : '' }} Vote Counting System</title>

{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- Scripts -->
{{--    @yield('styles')--}}
    @livewireStyles
</head>
<body>

@yield('content')

{{--<script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--@yield('scripts')--}}
@livewireScripts
</body>
</html>
