<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body class="">

<div class="wrapper">


{{--    <div class="content-wrapper">--}}

        <section class="content">
            @yield('content')
        </section>

{{--    </div>--}}


</div>
@include('partials.footer')
@include('partials.scripts')
</body>
</html>
