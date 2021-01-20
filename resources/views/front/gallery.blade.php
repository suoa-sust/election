@extends('layouts.front')
@section('content')

    <br>
    <div class="container page-top">
        {{--        <h3 class="text-center">Photo Gallery</h3>--}}

        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery1.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery1.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery2.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery2.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery3.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery3.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery4.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery4.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery5.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery5.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery6.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery6.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery7.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery7.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{asset('images/gallery/gallery8.jpg')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{asset('images/gallery/gallery8.jpg')}}" class="zoom img-fluid "  alt="">

                </a>
            </div>

        </div>
    </div>



@endsection

@push('styles')

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="../../dist/css/gallery.css">

@endpush


@push('scripts')

    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
            $(".zoom").hover(function(){
                $(this).addClass('transition');
            }, function(){
                $(this).removeClass('transition');
            });
        });
    </script>
@endpush