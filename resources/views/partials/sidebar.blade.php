<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    @php
    $authUser = auth()->user();
    $currentUrl = url()->current();
    @endphp
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">
                <img src="{{ asset($authUser->userProfile->photo ?? asset('dist/img/avatar5.png')) }}" class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block">{{ $authUser->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ $currentUrl == route('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('vote.count') }}" class="nav-link {{ $currentUrl == route('vote.count') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-plus-circle"></i>
                        <p>Vote Count</p>
                    </a>
                </li>


                <li class="nav-item has-treeview {{ (($currentUrl == route('year.create'))||($currentUrl == route('year.index'))) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (($currentUrl == route('year.create'))||($currentUrl == route('year.index'))) ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Year
                            <i class="fas fa-angle-left right"></i>
                            {{--                            <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('year.index') }}" class="nav-link {{ $currentUrl == route('year.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Years</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('year.create') }}" class="nav-link {{ $currentUrl == route('year.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Year</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview {{ (($currentUrl == route('candidate.create'))||($currentUrl == route('candidate.search'))) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Candidates
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview {{ (($currentUrl == route('candidate.create')) || ($currentUrl == route('candidate.search'))) ? 'menu-open' : '' }}">
                        <li class="nav-item">
                            <a href="{{ route('candidate.search') }}" class="nav-link {{ $currentUrl == route('candidate.search') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Candidate</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('candidate.create') }}" class="nav-link {{ $currentUrl == route('candidate.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Candidate</p>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('candidate.index') }}" class="nav-link {{ $currentUrl == route('candidate.index') ? 'active' : '' }}">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>All Candidates</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ (($currentUrl == route('seat.create')) || ($currentUrl == route('seat.index'))) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chair"></i>
                        <p>Seat
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('seat.create') }}" class="nav-link {{ $currentUrl == route('seat.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Seat</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('seat.index') }}" class="nav-link {{ $currentUrl == route('seat.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Seats</p>
                            </a>
                        </li>
                    </ul>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('year.search') }}" class="nav-link {{ ($currentUrl == route('year.search')||($currentUrl == route('details.year.search'))) ? 'active' : '' }}">--}}
{{--                        <i class="nav-icon fas fa-search"></i>--}}
{{--                        <p>Year-wise Search</p>--}}
{{--                    </a>--}}
{{--                </li>--}}


                <li class="nav-header">System Options</li>

                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ ($currentUrl == route('user.index')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>List of Users</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link {{ $currentUrl == route('register') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Add User/Admin</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Password Reset</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
