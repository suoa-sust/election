<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{--<meta http-equiv="refresh" content="1">--}}
<title>{{ isset($title) ? $title.' -' : '' }} Vote Counting System</title>

@include('partials.styles')

<body class="hold-transition layout-top-nav">

<div class="wrapper">

{{--    @include('partials.navbar')--}}
{{--    <div class="content-wrapper">--}}

        <section class="content">
            @yield('content')
        </section>

{{--    </div>--}}


</div>
{{--@include('partials.footer')--}}
{{--@include('partials.scripts')--}}
</body>
</html>
