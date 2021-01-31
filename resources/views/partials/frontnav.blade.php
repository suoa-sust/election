<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{  url('/') }}" class="navbar-brand">
            <img src="{{ asset('dist/img/sust_logo.png') }}" alt="SUST Logo" class="brand-image img-circle elevation-1"
                 style="opacity: .8">
            <span class="brand-text font-weight-bolder">SUOA Election</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href=" {{ route('live') }}">
                        <img src="{{ asset('live2.gif') }}" width="35px" style="padding-bottom: 5px">
                    </a>
                </li>

                <li class="nav-item">
                    <a href=" {{ route('past.result') }}" class="nav-link">Results</a>
                </li>

                <li class="nav-item">
                    <a href=" {{ route('public.seats') }}" class="nav-link">Seats</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('public.candidates') }}" class="nav-link">Candidates</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('public.notices') }}" class="nav-link">Notice</a>
                </li>

                <li class="nav-item">
                    <a href=" {{ route('public.commission') }}" class="nav-link">Election Commission</a>
                </li>

                <li class="nav-item">
                    <a href=" {{ route('public.gallery') }}" class="nav-link">Gallery</a>
                </li>

{{--                <li class="nav-item dropdown">--}}
{{--                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>--}}
{{--                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">--}}
{{--                        <li><a href="#" class="dropdown-item">Some action </a></li>--}}
{{--                        <li><a href="#" class="dropdown-item">Some other action</a></li>--}}

{{--                        <li class="dropdown-divider"></li>--}}

{{--                        <!-- Level two dropdown-->--}}
{{--                        <li class="dropdown-submenu dropdown-hover">--}}
{{--                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>--}}
{{--                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">--}}
{{--                                <li>--}}
{{--                                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>--}}
{{--                                </li>--}}

{{--                                <!-- Level three dropdown-->--}}
{{--                                <li class="dropdown-submenu">--}}
{{--                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>--}}
{{--                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">--}}
{{--                                        <li><a href="#" class="dropdown-item">3rd level</a></li>--}}
{{--                                        <li><a href="#" class="dropdown-item">3rd level</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <!-- End Level three -->--}}

{{--                                <li><a href="#" class="dropdown-item">level 2</a></li>--}}
{{--                                <li><a href="#" class="dropdown-item">level 2</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <!-- End Level two -->--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

            <!-- SEARCH FORM -->
{{--            <form class="form-inline ml-0 ml-md-3">--}}
{{--                <div class="input-group input-group-sm">--}}
{{--                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <button class="btn btn-navbar" type="submit">--}}
{{--                            <i class="fas fa-search"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link"  href=" {{ route('live') }}">--}}
{{--                    <i class="fas fa-comments"></i>--}}
{{--                    <img src="{{ asset('live2.gif') }}" width="35px" style="padding-bottom: 5px"> Results--}}
{{--                    <span class=" badge badge-danger navbar-badge">3</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <!-- Notifications Dropdown Menu -->
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-bell"></i>--}}
{{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <span class="dropdown-header">15 Notifications</span>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--                        <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                        <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--                        <span class="float-right text-muted text-sm">2 days</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i--}}
{{--                        class="fas fa-th-large"></i></a>--}}
{{--            </li>--}}
        </ul>
    </div>
</nav>
<!-- /.navbar -->
