@extends('layouts.front')
@section('content')

    <br>
    <section class="mbr-gallery mbr-slider-carousel cid-qBK2ZYNhQk" id="images/gallery/gallery2-69" data-rv-view="1817">

        <div class="container">
            <div><!-- Filter -->
                <div class="mbr-gallery-filter container gallery-filter-active">
                    <ul buttons="0">
                        <li class="mbr-gallery-filter-all"><a class="btn btn-md btn-primary-outline active display-4"
                                                              href="">All</a></li>
                        <li><a class="btn btn-md btn-primary-outline display-4" href="">2021</a></li>
                        <li><a class="btn btn-md btn-primary-outline display-4" href="">2020</a></li>
                        <li><a class="btn btn-md btn-primary-outline display-4" href="">2019</a></li>
                        <li><a class="btn btn-md btn-primary-outline display-4" href="">2018</a></li>
                        <li><a class="btn btn-md btn-primary-outline display-4" href="">General</a></li>
                    </ul>
                </div><!-- Gallery -->
                <div class="mbr-gallery-row" style="position: relative; height: 415.968px;">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div>

                                @foreach($galleries as $gallery)
                                    <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"
                                         data-tags="{{$gallery->tag}}" style="position: absolute; left: 0%; top: 0px;">
                                        <div href="#lb-gallery2-69" data-slide-to="0" data-toggle="modal"><img
                                                src="{{$gallery->url}}"
                                                alt=""><span class="icon-focus"></span></div>
                                    </div>
                                @endforeach
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2021" style="position: absolute; left: 24.955%; top: 0px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="1" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery2.jpg"--}}
                                {{--                                            alt=""><i class="icon-plus"></i></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2020" style="position: absolute; left: 50%; top: 0px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="2" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery3.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="General" style="position: absolute; left: 50%; top: 0px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="2" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery3.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2020" style="position: absolute; left: 74.955%; top: 0px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="3" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery4.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2019"--}}
                                {{--                                     style="position: absolute; left: 24.955%; top: 180px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="4" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery5.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2018" style="position: absolute; left: 74.955%; top: 195px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="5" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery6.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2019"--}}
                                {{--                                     style="position: absolute; left: 0%; top: 195px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="6" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery7.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false"--}}
                                {{--                                     data-tags="2019"--}}
                                {{--                                     style="position: absolute; left: 50%; top: 195px;">--}}
                                {{--                                    <div href="#lb-gallery2-69" data-slide-to="7" data-toggle="modal"><img--}}
                                {{--                                            src="images/gallery/gallery8.jpg"--}}
                                {{--                                            alt=""><span class="icon-focus"></span></div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- Lightbox -->
                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1"
                     data-keyboard="true" data-interval="false" id="lb-gallery2-69" style="display: none;"
                     aria-hidden="true">
                    <div class="modal-dialog" style="width: 575px; top: 10px;">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="carousel-inner">

                                    @foreach($galleries as $gallery)
                                        <div class="carousel-item {{$gallery->id==1?'active':''}}"><img
                                                src="{{ $gallery->url }}" alt=""></div>
                                    @endforeach
                                    {{--                                    <div class="carousel-item active"><img--}}
                                    {{--                                            src="images/gallery/gallery1.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery2.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery3.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery4.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery5.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery6.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery7.jpg" alt=""></div>--}}
                                    {{--                                    <div class="carousel-item"><img--}}
                                    {{--                                            src="images/gallery/gallery8.jpg" alt=""></div>--}}
                                </div>
                                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev"
                                   href="#lb-gallery2-69"><span class="mbri-left mbr-iconfont"
                                                                aria-hidden="true"></span><span
                                        class="sr-only">Previous</span></a><a
                                    class="carousel-control carousel-control-next"
                                    role="button" data-slide="next"
                                    href="#lb-gallery2-69"><span
                                        class="mbri-right mbr-iconfont" aria-hidden="true"></span><span
                                        class="sr-only">Next</span></a><a class="close" href="#" role="button"
                                                                          data-dismiss="modal"><span
                                        class="sr-only">Close</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




@endsection

@push('styles')

    {{--    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/web/assets/mobirise-icons/mobirise-icons.css">--}}
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/tether/tether.min.css">
    {{--    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/soundcloud-plugin/style.css">--}}
    {{--    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/dropdown/css/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/theme/css/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/mobirise-gallery/style.css">
    <link rel="stylesheet" href="https://mobirise.com/bootstrap-gallery/assets1/mobirise/css/mbr-additional.css" type="text/css">

@endpush


@push('scripts')

    <script src="https://mobirise.com/bootstrap-gallery/assets1/web/assets/jquery/jquery.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/popper/popper.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/tether/tether.min.js"></script>
    {{--    <script src="https://mobirise.com/bootstrap-gallery/assets1/bootstrap/js/bootstrap.min.js"></script>--}}
    <script src="https://mobirise.com/bootstrap-gallery/assets1/touch-swipe/jquery.touch-swipe.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/dropdown/js/script.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/jarallax/jarallax.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/smooth-scroll/smooth-scroll.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/masonry/masonry.pkgd.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/theme/js/script.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/mobirise-gallery/player.min.js"></script>
    <script src="https://mobirise.com/bootstrap-gallery/assets1/mobirise-gallery/script.js"></script>
        <script src="https://mobirise.com/bootstrap-gallery/assets1/mobirise-slider-video/script.js"></script>

@endpush
