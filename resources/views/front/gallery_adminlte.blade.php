@extends('layouts.front')
@section('content')


    <section>
        {{--        <div class="container">--}}
        <div class="row">

            <div class="col-md-12">
                <div class="card card-default">
                    {{--                        <div class="card-header">--}}
                    {{--                            <div class="card-title" style="text-align: center">--}}
                    {{--                                Officers Election Photo Gallery--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <br>
                    <h3 class="text-center">Officers Election Photo Gallery</h3>
                    <div class="card-body">

                        <div class="btn-group w-100 mb-2">
                            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2019"> Category 1 (WHITE) </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2018"> Category 2 (BLACK) </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                        </div>

                        <div class="row">
                            @foreach($galleries as $gallery)
                                <div class="filtr-item col-sm-2">
                                    <a href="{{ asset($gallery->url) }}" data-toggle="lightbox" data-lightbox="{{ $gallery->tag }}" data-sort="{{ $gallery->tag }}" data-category="{{ $gallery->id }}" data-title="{{ $gallery->caption }}" data-gallery="gallery">
                                        <img src="{{ asset($gallery->url) }}" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                </div>
                            @endforeach

                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-sm-2">--}}
                            {{--                                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">--}}
                            {{--                                        <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
        {{--        </div>--}}

    </section>



@endsection

@push('styles')

    <link rel="stylesheet" href="{{ asset('plugins/ekko-lightbox/ekko-lightbox.css') }}">


@endpush


@push('scripts')

    <script src="{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

    <script>

        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({gutterPixels: 3});
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })

    </script>

@endpush
