<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/back/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('/assets/back/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/back/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/assets/back/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/assets/back/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/back/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/back/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/back/css/dashboard.css') }}">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('/assets/back/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/back/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('home') }}" class="app-brand-link">


                        <div class="img-contain">
                            <img class="mb-2" src="{{ asset('assets/front/images/wheat-svgrepo-com.svg') }}"
                                alt="Logo" width="250px">
                            <span class="text-black logo-name">TIG ESTATE</span>

                        </div>


                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{ request()->routeIs('admin') ? 'active' : '' }}">
                        <a href="{{ route('admin') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <!-- Layouts -->
                    <li class="menu-item {{ request()->routeIs('properties.*') ? 'active' : '' }}">
                        <a href="{{ route('properties.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Properties">Properties</div>
                        </a>

                    </li>

                    @if (auth()->user()->role_id === 1)
                        <li class="menu-item {{ request()->routeIs('agents.*') ? 'active' : '' }}">
                            <a href="{{ route('agents.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div data-i18n="Properties">Agents</div>
                            </a>

                        </li>
                        <li class="menu-item {{ request()->routeIs('property.for.aproval') ? 'active' : '' }}">
                            <a href="{{ route('property.for.aproval') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div data-i18n="Properties">Waiting For Aproval</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div data-i18n="Contacts">Contacts</div>
                            </a>

                        </li>
                    @endif

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-between"
                        id="navbar-collapse">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="{{ asset('/storage/' . auth()->user()->image) }}" alt=""
                                    class="w-px-40 h-auto rounded-circle">
                            </div>
                            <div>
                                <span class="fw-semibold ms-2">{{ auth()->user()->first_name }}
                                    , {{ auth()->user()->role->name }}
                                </span>
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">


                            <!-- User -->
                            <li>
                                <a class="btn btn-danger" href=""
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible position-absolute"
                        style="bottom: 15px; right:15px;" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible position-absolute"
                        style="bottom: 15px; right:15px;" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                @yield('admin_content')

                <!-- / Navbar -->
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/assets/back/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/back/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/back/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/back/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/assets/back/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/back/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/back/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/back/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
