<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate(true) !!}
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="robots" content="index">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/bitmap.png') }}">
    <meta http-equiv="Content-Security-Policy" content="object-src 'none';">

    {{-- Bootstrap link --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'  ])
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VNPVF4DM3C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VNPVF4DM3C');
    </script>
    {{-- Google AdSense link --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6477832805856369"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <nav id="heading" class="navbar fixed-top shadow">
        <div class="container-fluid">
            <a href="{{ route('home') }}" class=" ">
                <img id="myImage" src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40"
                    alt="re" style="display: none;" />
                <div id="myProgressBar" class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="menu-left">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="list-group">
                        <a href="{{ route('home') }}"
                            class="list-group-item list-group-item-action {{ Request::is('home') ? 'active' : '' }}">
                            الرئيسية
                        </a>
                        <a href="{{ route('categories.index') }}"
                            class="list-group-item list-group-item-action {{ Request::is('categories*') ? 'active' : '' }}">التصنيفات</a>
                        <a href="{{ route('policy') }}"
                            class="list-group-item list-group-item-action {{ Request::is('policy') ? 'active' : '' }}">الخصوصية</a>
                        <a href="{{ route('about') }}"
                            class="list-group-item list-group-item-action {{ Request::is('about') ? 'active' : '' }}">عنا</a>
                        <a href="{{route('about')}}" class="list-group-item list-group-item-action " >الأسئلة</a>
                    </nav>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="البحث" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">بحث</button>
                    </form>
                    <div class="d-flex mt-3">
                        <ul class="navbar-nav">
                            @guest
                                <div class="alert alert-info" role="alert">
                                    <i class="bi bi-info-circle-fill"></i> أنت غير مسجل الدخول. من فضلك <a
                                        href="{{ route('login') }}">قم بتسجيل الدخول</a> أو <a
                                        href="{{ route('register') }}">قم بالتسجيل</a>.
                                </div>
                            @else
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn" type="submit">تسجيل الخروج</button>
                                    </form>
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
                            <a href="{{ URL('admin/posts') }}" class="btn btn-dark rounded-3 me-2" title="التحكم">
                                <i class="bi bi-house-door">
                                    التحكم
                                </i>
                            </a>
                            <a href="#" class="btn btn-dark rounded-3 me-2" title="الإعدادات">
                                <i class="bi bi-gear"></i> الإعدادات
                            </a>
                            <a href="{{ route('settings.index') }}" class="btn btn-dark rounded-3 me-2" title="الحساب">
                                <i class="bi bi-person"></i> الحساب
                            </a>
                            <a href="#" class="btn btn-dark rounded-3 me-2" title="البريد">
                                <i class="bi bi-envelope"></i> البريد
                            </a>
                            <a href="#" class="btn btn-dark rounded-3 me-2" title="إضافة مقال">
                                <i class="bi bi-file-plus"></i> إضافة مقال
                            </a>
                            <form class="btn btn-dark rounded-3 me-2" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="nav-link" type="submit">تسجيل الخروج</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container mt-5">
                <div class="font-variation">
                    <a href="#" class="btn btn-dark rounded-3" title="تسجيل خروج">
                        <i class="bi bi-box-arrow-right"></i> تسجيل خروج
                    </a>
                </div>
            </div>
        @endif
    @endguest
</body>

</html>
