<!-- Page Sidebar Start-->

<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('backend/assets/images/logo/logo_light.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <span class="stroke-icon sidebar-toggle status_toggle middle ">
                    <i class="{{ _icons('bars') }}"></i>
                </span>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    {{-- <li class="sidebar-main-title">
                <div>
                    <h6 class="lan-1">General</h6>
                </div>
            </li> --}}
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav"
                            href="{{ route(\Request::segment(1) . '.dashboard') }}">
                            <strong class="custom-sidebar-stroke-icon">
                                <i class="{{ _icons('home') }}"></i>
                            </strong>
                            <span class="custom-sidebar-list-text">Dashboard</span></a>
                        </a>
                    </li>

                    @can('setting-menu-list')
                    <li class="sidebar-list"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <strong class="custom-sidebar-stroke-icon">
                                <i class="{{ _icons('setting') }}"></i>
                            </strong>
                            <span class="custom-sidebar-list-text"> Setting</span></a>
                        <ul class="sidebar-submenu">
                            @can('role-list')
                            <li><a href="{{ route(\Request::segment(1) . '.roles') }}">Roles</a></li>
                            @endcan

                            @can('users-show')
                            <li><a href="{{ route(\Request::segment(1) . '.users') }}">Users</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

<!-- Page Sidebar Ends-->