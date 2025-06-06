<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <link href="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets_b/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets_b/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets_b/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jsoneditor@9.5.6/dist/jsoneditor.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <!-- Include JSONEditor JS -->
    <script src="https://cdn.jsdelivr.net/npm/jsoneditor@9.5.6/dist/jsoneditor.min.js"></script>


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
{{--                <i class="fas fa-laugh-wink"></i>--}}
            </div>
            <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ url()->current() == route('admin.home') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        {{-- @if(auth()->user()->super_admin)
            <li class="nav-item {{ url()->current() == route('admin.admins.index') ? "active" : "" }}">
                <a class="nav-link" href="{{ route('admin.admins.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admins</span>
                </a>
            </li>
        @endif --}}

        {{-- <li class="nav-item {{ url()->current() == route('admin.categories.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.categories.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Categories</span></a>
        </li> --}}

        @hasPermission(config('constants.permissions.destination_manager.value'))
        <li class="nav-item {{ url()->current() == route('admin.destinations.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.destinations.index') }}">
                <i class="fas fa-fw fa-mountain"></i>
                <span>Destinations</span></a>
        </li>
        @endHasPermission

        @hasPermission(config('constants.permissions.tour_manager.value'))
        <li class="nav-item on-click dropdown ">
            <a class="nav-link" href="javascript:;">
                <i class="fas fa-caret-down"></i>
                <span>Tours</span>
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item {{ url()->current() == route('admin.tours.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.tours.index') }}"><i class="fas fa-fw fa-mountain mr-2"></i>Tour</a></li>
                <li class="nav-item {{ url()->current() == route('admin.categories.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.categories.index') }}"><i class="fas fa-fw fa-briefcase mr-2"></i> Tour Categories</a></li>
                <li class="nav-item {{ url()->current() == route('admin.bookings.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.bookings.index') }}"> <i class="fas fa-fw fa-dollar-sign mr-2"></i>  Tour Bookings</a></li>
            </ul>
        </li>
        @endHasPermission
        @hasPermission(config('constants.permissions.hotel_manager.value'))
        <li class="nav-item on-click dropdown ">
            <a class="nav-link" href="javascript:;">
                <i class="fas fa-caret-down"></i>
                <span>Hotels</span>
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item {{ url()->current() == route('admin.hotels.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.hotels.index') }}"><i class="fas fa-hotel mr-2"></i> Hotels</a></li>
                <li class="nav-item {{ url()->current() == route('admin.hotel-categories.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.hotel-categories.index') }}"><i class="fas fa-fw fa-briefcase mr-2"></i> Hotels Categories</a></li>
                <li class="nav-item {{ url()->current() == route('admin.hotel_bookings.index') ? 'active' : '' }}"><a class="dropdown-item mn-2" href="{{ route('admin.hotel_bookings.index') }}"><i class="fas fa-fw fa-dollar-sign mr-2"></i> Hotel Bookings</a></li>
            </ul>
        </li>
        @endHasPermission
        <li class="nav-item on-click dropdown ">
            <a class="nav-link" href="javascript:;">
                <i class="fas fa-caret-down"></i>
                <span>Transportation</span>
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item {{ url()->current() == route('admin.vehicles.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.vehicles.index') }}"><i class="fas fa-subway mr-2"></i> Vehicles </a></li>
                <li class="nav-item {{ url()->current() == route('admin.vehicle_bookings.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.vehicle_bookings.index') }}"><i class="fas fa-fw fa-dollar-sign mr-2"></i> Vehicle Bookings</a></li>
                {{-- <li class="nav-item {{ url()->current() == route('admin.hotel_bookings.index') ? 'active' : '' }}"><a class="dropdown-item mn-2" href="{{ route('admin.hotel_bookings.index') }}"><i class="fas fa-fw fa-dollar-sign mr-2"></i> Hotel Bookings</a></li> --}}
            </ul>
        </li>
        {{-- <li class="nav-item {{ url()->current() == route('admin.tours.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.tours.index') }}">
                <i class="fas fa-fw fa-mountain"></i>
                <span>Tours</span></a>
        </li> --}}

        {{-- <li class="nav-item {{ url()->current() == route('admin.bookings.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.bookings.index') }}">
                <i class="fas fa-fw fa-dollar-sign"></i>
                <span>Tour Bookings</span></a>
        </li> --}}

        <li class="nav-item {{ url()->current() == route('admin.payments.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.payments.index') }}">
                <i class="fas fa-fw fa-dollar-sign"></i>
                <span>Payments</span></a>
        </li>

        <li class="nav-item {{ url()->current() == route('admin.testimonials.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
                <i class="fas fa-newspaper"></i>
                <span>Testimonial</span></a>
        </li>
        <li class="nav-item {{ url()->current() == route('admin.video-reviews.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.video-reviews.index') }}">
                <i class="fas fa-fw fa-video"></i>
                <span>Reality Of A Trip</span></a>
        </li>
        <li class="nav-item on-click dropdown ">
            <a class="nav-link" href="javascript:;">
                <i class="fas fa-caret-down"></i>
                <span>User Management</span>
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item {{ url()->current() == route('admin.users.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.users.index') }}"><i class="fas fa-fw fa-users mr-2"></i> Users </a></li>
                <li class="nav-item {{ url()->current() == route('admin.memberships.index') ? 'active' : '' }}"><a class="dropdown-item mb-2" href="{{ route('admin.memberships.index') }}"><i class="fas fa-handshake mr-2"></i> Membership</a></li>
                @if(auth()->user()->super_admin)
                <li class="nav-item {{ url()->current() == route('admin.admins.index') ? "active" : "" }}">
                    <a class="dropdown-item mb-2" href="{{ route('admin.admins.index') }}">
                        <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                        <span>Admins</span>
                    </a>
                </li>
            @endif
                {{-- <li class="nav-item {{ url()->current() == route('admin.hotel_bookings.index') ? 'active' : '' }}"><a class="dropdown-item mn-2" href="{{ route('admin.hotel_bookings.index') }}"><i class="fas fa-fw fa-dollar-sign mr-2"></i> Hotel Bookings</a></li> --}}
            </ul>
        </li>

        {{-- <li class="nav-item {{ url()->current() == route('admin.users.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span></a>
        </li> --}}
        @hasPermission(config('constants.permissions.blog_manager.value'))
        <li class="nav-item {{ url()->current() == route('admin.blogs.index') ? "active" : "" }}">
            <a class="nav-link" href="{{ route('admin.blogs.index') }}">
                <i class="fas fa-newspaper"></i>
                <span>Blogs</span></a>
        </li>
        @endHasPermission
        <li class="nav-item on-click dropdown ">
            <a class="nav-link" href="javascript:;">
                <i class="fas fa-caret-down"></i>
                <span>Submissions</span>
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item {{ url()->current() == route('admin.TravelRequest.index') ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('admin.TravelRequest.index') }}">Tour Request</a></li>
                <li class="nav-item {{ url()->current() == route('admin.consultation_requests.index') ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('admin.consultation_requests.index') }}">Consultation Submissions</a></li>
                <li class="nav-item {{ url()->current() == route('admin.Form.index') ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('admin.Form.index') }}">Contact us Submissions</a></li>
            </ul>
        </li>





        <!-- Divider -->
{{--        <hr class="sidebar-divider">--}}

        <!-- Heading -->
{{--        <div class="sidebar-heading">--}}
{{--            Interface--}}
{{--        </div>--}}

        <!-- Nav Item - Pages Collapse Menu -->
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"--}}
{{--               aria-expanded="true" aria-controls="collapseTwo">--}}
{{--                <i class="fas fa-fw fa-cog"></i>--}}
{{--                <span>Components</span>--}}
{{--            </a>--}}
{{--            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Custom Components:</h6>--}}
{{--                    <a class="collapse-item" href="buttons.html">Buttons</a>--}}
{{--                    <a class="collapse-item" href="cards.html">Cards</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Utilities Collapse Menu -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"--}}
{{--               aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--                <i class="fas fa-fw fa-wrench"></i>--}}
{{--                <span>Utilities</span>--}}
{{--            </a>--}}
{{--            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"--}}
{{--                 data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Custom Utilities:</h6>--}}
{{--                    <a class="collapse-item" href="utilities-color.html">Colors</a>--}}
{{--                    <a class="collapse-item" href="utilities-border.html">Borders</a>--}}
{{--                    <a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
{{--                    <a class="collapse-item" href="utilities-other.html">Other</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

        <!-- Divider -->
{{--        <hr class="sidebar-divider">--}}

{{--        <!-- Heading -->--}}
{{--        <div class="sidebar-heading">--}}
{{--            Addons--}}
{{--        </div>--}}

{{--        <!-- Nav Item - Pages Collapse Menu -->--}}
{{--        <li class="nav-item active">--}}
{{--            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"--}}
{{--               aria-controls="collapsePages">--}}
{{--                <i class="fas fa-fw fa-folder"></i>--}}
{{--                <span>Pages</span>--}}
{{--            </a>--}}
{{--            <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"--}}
{{--                 data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Login Screens:</h6>--}}
{{--                    <a class="collapse-item" href="login.html">Login</a>--}}
{{--                    <a class="collapse-item" href="register.html">Register</a>--}}
{{--                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
{{--                    <div class="collapse-divider"></div>--}}
{{--                    <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                    <a class="collapse-item" href="404.html">404 Page</a>--}}
{{--                    <a class="collapse-item active" href="blank.html">Blank Page</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Charts -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="charts.html">--}}
{{--                <i class="fas fa-fw fa-chart-area"></i>--}}
{{--                <span>Charts</span></a>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Tables -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="tables.html">--}}
{{--                <i class="fas fa-fw fa-table"></i>--}}
{{--                <span>Tables</span></a>--}}
{{--        </li>--}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
{{--                <form--}}
{{--                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."--}}
{{--                               aria-label="Search" aria-describedby="basic-addon2">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-primary" type="button">--}}
{{--                                <i class="fas fa-search fa-sm"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
{{--                    <li class="nav-item dropdown no-arrow d-sm-none">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="fas fa-search fa-fw"></i>--}}
{{--                        </a>--}}
{{--                        <!-- Dropdown - Messages -->--}}
{{--                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"--}}
{{--                             aria-labelledby="searchDropdown">--}}
{{--                            <form class="form-inline mr-auto w-100 navbar-search">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" class="form-control bg-light border-0 small"--}}
{{--                                           placeholder="Search for..." aria-label="Search"--}}
{{--                                           aria-describedby="basic-addon2">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <button class="btn btn-primary" type="button">--}}
{{--                                            <i class="fas fa-search fa-sm"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}

                    <!-- Nav Item - Alerts -->
{{--                    <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="fas fa-bell fa-fw"></i>--}}
{{--                            <!-- Counter - Alerts -->--}}
{{--                            <span class="badge badge-danger badge-counter">3+</span>--}}
{{--                        </a>--}}
{{--                        <!-- Dropdown - Alerts -->--}}
{{--                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"--}}
{{--                             aria-labelledby="alertsDropdown">--}}
{{--                            <h6 class="dropdown-header">--}}
{{--                                Alerts Center--}}
{{--                            </h6>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <div class="icon-circle bg-primary">--}}
{{--                                        <i class="fas fa-file-alt text-white"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="small text-gray-500">December 12, 2019</div>--}}
{{--                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <div class="icon-circle bg-success">--}}
{{--                                        <i class="fas fa-donate text-white"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="small text-gray-500">December 7, 2019</div>--}}
{{--                                    $290.29 has been deposited into your account!--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <div class="icon-circle bg-warning">--}}
{{--                                        <i class="fas fa-exclamation-triangle text-white"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="small text-gray-500">December 2, 2019</div>--}}
{{--                                    Spending Alert: We've noticed unusually high spending for your account.--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

                    <!-- Nav Item - Messages -->
{{--                    <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="fas fa-envelope fa-fw"></i>--}}
{{--                            <!-- Counter - Messages -->--}}
{{--                            <span class="badge badge-danger badge-counter">7</span>--}}
{{--                        </a>--}}
{{--                        <!-- Dropdown - Messages -->--}}
{{--                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"--}}
{{--                             aria-labelledby="messagesDropdown">--}}
{{--                            <h6 class="dropdown-header">--}}
{{--                                Message Center--}}
{{--                            </h6>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="dropdown-list-image mr-3">--}}
{{--                                    <img class="rounded-circle" src="img/undraw_profile_1.svg"--}}
{{--                                         alt="...">--}}
{{--                                    <div class="status-indicator bg-success"></div>--}}
{{--                                </div>--}}
{{--                                <div class="font-weight-bold">--}}
{{--                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a--}}
{{--                                        problem I've been having.</div>--}}
{{--                                    <div class="small text-gray-500">Emily Fowler · 58m</div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="dropdown-list-image mr-3">--}}
{{--                                    <img class="rounded-circle" src="img/undraw_profile_2.svg"--}}
{{--                                         alt="...">--}}
{{--                                    <div class="status-indicator"></div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="text-truncate">I have the photos that you ordered last month, how--}}
{{--                                        would you like them sent to you?</div>--}}
{{--                                    <div class="small text-gray-500">Jae Chun · 1d</div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="dropdown-list-image mr-3">--}}
{{--                                    <img class="rounded-circle" src="img/undraw_profile_3.svg"--}}
{{--                                         alt="...">--}}
{{--                                    <div class="status-indicator bg-warning"></div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="text-truncate">Last month's report looks great, I am very happy with--}}
{{--                                        the progress so far, keep up the good work!</div>--}}
{{--                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                                <div class="dropdown-list-image mr-3">--}}
{{--                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"--}}
{{--                                         alt="...">--}}
{{--                                    <div class="status-indicator bg-success"></div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone--}}
{{--                                        told me that people say this to all dogs, even if they aren't good...</div>--}}
{{--                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->full_name }}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{ returnAvatar(auth()->user()->avatar) }}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                                Settings--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                                Activity Log--}}
{{--                            </a>--}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                </div>
                <!-- Page Heading -->
                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; {{ config('app.name') }} {{ date('Y') }} Powered by <a href="https://codewyse.io" target="_blank" >Code Wyse</a></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="post" id="deleteForm">
                @method("DELETE")
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to delete this?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" >Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>

ul.dropdown-menu li.nav-item.on-click.dropdown {
    background: transparent;
}

li.nav-item.on-click.dropdown ul.dropdown-menu {
    padding: 0;
    background: transparent !important;
    border: 0;
    text-align: start;
}

li.nav-item.on-click.dropdown ul.dropdown-menu li.nav-item {
    padding: 0 0 10px 0;
}

li.nav-item.on-click.dropdown ul.dropdown-menu li.nav-item a {
    color: white;
}

li.nav-item.on-click.dropdown ul.dropdown-menu li.nav-item a:hover {
    background: transparent !important;
    color: white;
}
</style>
<div class="conf"></div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets_b/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets_b/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('assets_b/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets_b/js/sb-admin-2.min.js') }}"></script>

<script src="{{ asset('assets_b/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets_b/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>

<script>
    function deleteConf (link){
        $("#deleteForm").attr('action',link);
        $("#deleteModal").modal();
    }
</script>

@yield('script')
<script>

    function showPassword(inputId){
        const element = document.getElementById(inputId);
        if(element.type === 'password') {
            element.type = 'text';
        }
        else {
            element.type = 'password';
        }
    }

    $(document).ready(function() {
        // Toggle dropdown menu on click
        $('.dropdown > a').on('click', function(e) {
            e.preventDefault();
            var $dropdownMenu = $(this).next('.dropdown-menu');
            $dropdownMenu.slideToggle();  // Toggle the visibility of the dropdown
            $('.dropdown-menu').not($dropdownMenu).slideUp();  // Hide other dropdowns
        });

        // Hide dropdown menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu').slideUp();  // Hide all dropdowns
            }
        });
    });
    </script>

</body>

</html>
