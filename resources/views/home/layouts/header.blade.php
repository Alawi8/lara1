<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title'){{ ' | ' . config('app.name') }}</title>
    <meta name="description" content="@yield('exept','مشكاه هي منصة تقنية مبتكرة تهدف إلى تحسين وتسهيل العمليات التقنية. تتميز المنصة بمجموعة واسعة من الخدمات والأدوات التي تدعم مطوري البرمجيات ورواد الأعمال في تحقيق أهدافهم بشكل فعال.')">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="robots" content="index">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/bitmap.png') }}">
    <meta name="generator" content="Hugo 0.101.0">
    {{-- Bootstrap link --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
    {{-- Google AdSense link --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6477832805856369"
        crossorigin="anonymous"></script>
    @livewireStyles
    <style>
        * {
            font-family: 'Segoe UI';
            font-size: 18px;
        }

        #in-search {
            border-radius: 5px 0 0 5px;
        }

        #btn-search {
            border-radius: 30px 0px 0px 30px;
        }

        #cate-aleart {
            background-color: #6c757d;
            color: #fff;
            text-align: center;
            font-weight: bold;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 10px;
        }

        .list-group a {
            margin: 5px 0;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #content img {
            vertical-align: middle;
        }

        #content {
            word-wrap: break-word;
        }

        #body {
            width: 100%;
            /* text-color : black ; */
        }

        #heading {
            -webkit-animation: color-change-2x 2s linear infinite alternate both;
            animation: color-change-2x 2s linear infinite alternate both;
            border-color: rgb(0, 0, 0);
            border-radius: 0 0 12px 12px;
            width: 100%;
            vertical-align: middle;
        }

        @-webkit-keyframes color-change-2x {
            0% {
                background: #ffffff;
            }

            100% {
                background: #547df8;
            }
        }

        @keyframes color-change-2x {
            0% {
                background: #ffffff;
            }

            100% {
                background: #547df8;
            }
        }

        #card-content-posts {
            width: 100%;
            height: 22rem;
            max-zoom: 99px;
        }

        #style-icon {
            animation-name: example;
            animation-duration: 3s;
            animation-iteration-count: 2222;
        }

        @keyframes example {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #categure {
            border: 5px solid;
            border-radius: 20px;
            border-color: rgb(255, 255, 255);
            margin-bottom: 25px;
            box-shadow: 0 0 25px rgb(163, 160, 160);
        }

        #cate-aleart {
            border-radius: 30px 30px 0 70px;
        }

        #cate-aleart-button {
            border-radius: 20px 0 0 20px;
        }

        #in-search {
            border-radius: 0 20px 20px 0;
        }

        #input_seo {
            height: 50%;
        }
    </style>
    @yield('style')
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
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="menu-left">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="list-group">
                        <a href="{{ route('home') }}"
                            class="list-group-item list-group-item-action {{ Request::is('posts') ? 'active' : '' }}"
                            aria-current="true">
                            الرئيسية
                        </a>
                        <a href="{{ route('categories.index') }}"
                            class="list-group-item list-group-item-action {{ Request::is('categories*') ? 'active' : '' }}">التصنيفات</a>
                        <a href="{{route('policy')}}"
                            class="list-group-item list-group-item-action {{ Request::is('policy') ? 'active' : '' }}">الخصوصية</a>
                        <a href="{{route('about')}}"
                            class="list-group-item list-group-item-action {{ Request::is('about') ? 'active' : '' }}">عنا</a>
                        <a class="list-group-item list-group-item-action " aria-disabled="true">الأسئلة</a>
                    </nav>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="d-flex mt-3">
                        <ul class="navbar-nav">
                            @guest
                                <div class="alert alert-info" role="alert">
                                    <i class="bi bi-info-circle-fill"></i> أنت غير مسجل الدخول. من فضلك <a
                                        href="{{route('login')}}">قم بتسجيل الدخول</a> أو <a
                                        href="{{route('register')}}">قم بالتسجيل</a>.
                                </div>
                            @else
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">Logout</button>
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
                            <a href="{{route ('logout')}}" class="btn btn-dark rounded-3" title="تسجيل الخروج">
                                <i class="bi bi-box-arrow-right"></i> تسجيل الخروج
                            </a>
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

    <!-- Your page content goes here -->

    @livewireScripts
</body>
</html>
