<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ isset($title) ? $title.' -' : '' }} Officers' Election Portal</title>

    <link rel="shortcut icon" href="{{ asset('live.png') }}" type="image/x-icon"/>

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Scripts -->
{{--    @yield('styles')--}}
    @livewireStyles
    <style>
        table tr {
            line-height: .9em !important;
        }

    </style>
</head>
<body>

@yield('content')

{{--<script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--@yield('scripts')--}}
@livewireScripts
</body>
</html>
