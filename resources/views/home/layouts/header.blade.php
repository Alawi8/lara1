<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate(true) !!}
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/bitmap.png') }}">
    <meta http-equiv="Content-Security-Policy" content="object-src 'none';">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    {{-- Bootstrap link --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5KMV6F7X');
    </script>
    <!-- End Google Tag Manager -->

    <style>
        * {
            font-family: 'Segoe UI';
            font-size: 16px;
        }

        #in-search {
            border-radius: 0 20px 20px 0;
        }

        #btn-search {
            border-radius: 30px 0px 0px 30px;
        }

        #heading {
            -webkit-animation: color-change-2x 2s linear infinite alternate both;
            animation: color-change-2x 2s linear infinite alternate both;
            border-radius: 0 0 22px 22px;
        }

        @-webkit-keyframes color-change-2x {
            0% {
                background: #ffffff;
            }

            100% {
                background: #547df8;
            }
        }


        #content-items {
            margin-top: 20px;
        }

        h1 {
            color: #333;
            font-size: 22px;
        }

        #content-img-posts-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #post-img {
            max-width: 100%;
            /* Make the image responsive */
            max-height: 100%;
            /* Set a maximum height for the image */
            width: auto;
            height: auto;
            border-radius: 8px;
            /* Add border-radius for rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Add box-shadow for a subtle effect */
            display: block;
            /* Remove default image spacing */
            margin: 0 auto;
            /* Center the image */
        }

        #content {
            line-height: 1.6;
            font-size: 16px;
            color: #555;
        }

        #card-posts-menu {
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            border: 5px solid;
            border-radius: 20px 20px 20px 20px;
            border-color: rgb(255, 255, 255);
            margin-bottom: 25px;
            box-shadow: 0 0 25px rgb(163, 160, 160)
        }

        #card-posts-menu:hover {
            transform: scale(1.05);
        }

        #card-posts-menu-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            box-shadow: 0 0 25px rgb(163, 160, 160) width: 100%;
            height: 10rem;
            border-radius: 20px 20px 0 90px
        }

        .card-body {
            padding: 15px;
        }

        .card-body h6 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        h1 {
            color: #333;
            font-size: 19px;
        }
    </style>
    @livewireStyles
</head>

<header>
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
                        <a href="{{ route('about') }}" class="list-group-item list-group-item-action ">الأسئلة</a>
                    </nav>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="البحث" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">بحث</button>
                    </form>
                    <div class=" mt-3">
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
                            <a href="{{route('livewire.show')}}">livewire</a>

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

</header>
