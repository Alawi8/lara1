<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title'){{ ' | ' . config('app.name') }}</title>
    <meta name="description" content="@yield('exept','مشكاه هي منصة تقنية مبتكرة تهدف إلى تحسين وتسهيل العمليات التقنية. تتميز المنصة بمجموعة واسعة من الخدمات والأدوات التي تدعم مطوري البرمجيات ورواد الأعمال في تحقيق أهدافهم بشكل فعال.')">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/img/bitmap.png') }}">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
    {{-- google adsens link --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6477832805856369"
        crossorigin="anonymous"></script>
    @livewireStyles
</head>
@yield('style')
<nav id="heading" class="navbar bg-body-tertiary fixed-top ">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class=" ">
            <img id="myImage" src="{{ asset('public/assets/img/bitmap.png') }}" width="40" height="40"
                alt="re" style="display: none;" />
            <div id="myProgressBar" class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="menu-left">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="list-group">
                    <a href="{{ route('home') }}"
                        class="list-group-item list-group-item-action {{ Request::is('posts') ? 'active' : '' }}"
                        aria-current="true">
                        الرئيسية
                    </a>
                    <a href="{{ route('categories.index') }}"
                        class="list-group-item list-group-item-action {{ Request::is('categories*') ? 'active' : '' }}">التصنيفات</a>
                    <button href="#"
                        class="list-group-item list-group-item-action {{ Request::is('first') ? 'active' : '' }}">a
                        first</button>
                    <button 
                        class="list-group-item list-group-item-action {{ Request::is('fourth') ? 'active' : '' }}">A
                        fourth link item</button>
                    <button class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link
                        item</button>
                </div>
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
                            <i class="bi bi-house-door">
                                التحكم
                            </i>
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
                    <i class="bi bi-box-arrow-right"></i> تسجيل خروج
                </a>
            </div>
        </div>
    @endif
@endguest
