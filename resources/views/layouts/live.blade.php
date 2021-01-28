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
        .making-it-scroll {
            height: 45px;
            margin-top: -27px;
            overflow: hidden;
            /*position: relative;*/
        }
        .making-it-scroll span {
            position: absolute;
            /*width: 75%;*/
            /*height: 100%;*/
            /*margin: 0;*/
            /*line-height: 50px;*/
            text-align: center;

            /* Starting position */
            -moz-transform:translateX(100%);
            -webkit-transform:translateX(100%);
            transform:translateX(100%);

            /* Apply animation to this element */
            -moz-animation: making-it-scroll 30s linear infinite;
            -webkit-animation: making-it-scroll 30s linear infinite;
            animation: making-it-scroll 30s linear infinite;
        }

        /* Move it (define the animation) */
        @-moz-keyframes making-it-scroll {
            0%   { -moz-transform: translateX(100%); }
            100% { -moz-transform: translateX(-100%); }
        }
        @-webkit-keyframes making-it-scroll {
            0%   { -webkit-transform: translateX(100%); }
            100% { -webkit-transform: translateX(-100%); }
        }
        @keyframes making-it-scroll {
            0%   {
                -moz-transform: translateX(100%); /* Firefox bug fix */
                -webkit-transform: translateX(100%); /* Firefox bug fix */
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%); /* Firefox bug fix */
                -webkit-transform: translateX(-100%); /* Firefox bug fix */
                transform: translateX(-100%);
            }
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
