
<body class="g-sidenav-show rtl bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
                <img src="{{ asset('material/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold text-white">مدونه</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dash.dashboard') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <span class="nav-link-text me-1">لوحة القيادة</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                post_add
                            </span>
                        </div>
                        <span class="nav-link-text me-1">المقالات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                auto_stories
                            </span>
                        </div>
                        <span class="nav-link-text me-1">الصفحات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                credit_card
                            </span>
                        </div>
                        <span class="nav-link-text me-1">الفواتير</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dash.profile') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                travel_explore
                            </span>
                        </div>
                        <span class="nav-link-text me-1">تحسين SEO</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dash.navigation') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                notifications
                            </span>
                        </div>
                        <span class="nav-link-text me-1">إشعارات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                account_circle
                            </span>
                        </div>
                        <span class="nav-link-text me-1">{{ Auth::user()->name }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dash.media') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-outlined">
                                imagesmode
                            </span>
                        </div>
                        <span class="nav-link-text me-1">الوسائط</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>
    <main class="main-content  position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3  rounded">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                        <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" {{-- href="javascript:;">لوحات القيادة</a></li> --}}
                                {{-- <li class="breadcrumb-item text-sm text-dark active" aria-current="page">RTL</li> --}} </ol>
                                {{-- <h6 class="font-weight-bolder mb-0">RTL</h6> --}}
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">أكتب هنا...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav me-auto ms-0 justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('home') }}" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown ps-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('material/img/team-2.jpg') }}"
                                                    class="avatar avatar-sm  ms-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('material/img/small-logos/logo-spotify.svg') }}"
                                                    class="avatar avatar-sm bg-gradient-dark  ms-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  ms-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('content')
            @include('dash.layouts.footer')
        </div>
    </main>
    {{-- @include('dash.pages.setting') --}}
    <!--   Core JS Files   -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


    <script>
        var xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yArray = [55, 49, 44, 24, 15];

        var data = [{
            x: xArray,
            y: yArray,
            type: "bar"
        }];

        var layout = {
            title: "World Wide Wine Production"
        };

        Plotly.newPlot("myPlot", data, layout);
    </script>

    <script>
        var exp = "x + 17";

        // Generate values
        var xValues = [];
        var yValues = [];
        for (var x = 0; x <= 10; x += 1) {
            yValues.push(eval(exp));
            xValues.push(x);
        }

        // Define Data
        var data = [{
            x: xValues,
            y: yValues,
            mode: "lines"
        }];

        // Define Layout
        var layout = {
            title: "y = " + exp
        };

        // Display using Plotly
        Plotly.newPlot("myPlot2", data, layout);
    </script>
    
    <script>
        var xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yArray = [55, 49, 44, 24, 15];

        var layout = {
            title: "World Wide Wine Production"
        };

        var data = [{
            labels: xArray,
            values: yArray,
            type: "pie"
        }];

        Plotly.newPlot("myPlot3", data, layout);
    </script>


    
