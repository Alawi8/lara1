<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title'){{ ' | ' . config('app.name') }}</title>
    <meta name="description" content="@yield('exept')">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="generator" content="Hugo 0.101.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VNPVF4DM3C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VNPVF4DM3C');
    </script>
</head>

<nav id="heading" class="navbar bg-body-tertiary fixed-top ">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class=" ">
            <img id="style-icon" src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/react-512.png"width="40"
                height="40" alt="re" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="menu-left">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">

                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('categories.index') }}">التصنيفات</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex mt-3">
                    <ul class="navbar-nav">
                        @guest
                            <div class="alert alert-info" role="alert">
                                <i class="bi bi-info-circle-fill"></i> أنت غير مسجل الدخول. من فضلك <a
                                    href="{{ route('login') }}">قم بتسجيل الدخول</a> أو <a
                                    href="{{ route('register-user') }}">قم بالتسجيل</a>.
                            </div>
                        @else
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('signout') }}">Logout</a>
                            </li>

                        @endguest
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>
<br>
<br>

@guest
@else
    @if (Auth::user()->role >> 0)
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="font-variation">
                        <!-- Thin outlined icons from Bootstrap Icons -->
                        <a href="{{ URL('admin/posts') }}" class="btn btn-dark rounded-3 me-2" title="التحكـم">
                            <i class="bi bi-house-door"></i> الرئيسية
                        </a>
                        <a href="#" class="btn btn-dark rounded-3 me-2" title="الاعدادات">
                            <i class="bi bi-gear"></i> الإعدادات
                        </a>
                        <a href="{{ route('settings.index') }}" class="btn btn-dark rounded-3 me-2" title="الحساب">
                            <i class="bi bi-person"></i> الحساب
                        </a>
                        <a href="#" class="btn btn-dark rounded-3 me-2" title="الايميل">
                            <i class="bi bi-envelope"></i> البريد
                        </a>
                        <a href="#" class="btn btn-dark rounded-3 me-2" title="اضف مقاله">
                            <i class="bi bi-file-plus"></i> إضافة مقال
                        </a>
                        <a href="{{ route('signout') }}" class="btn btn-dark rounded-3" title="خروج">
                            <i class="bi bi-box-arrow-right"></i> تسجيل الخروج
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container mt-5">
            <div class="font-variation">
                <a href="{{ route('signout') }}" class="btn btn-dark rounded-3" title="خروج">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>
        </div>
    @endif
@endguest
