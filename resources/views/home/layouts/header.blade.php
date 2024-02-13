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
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');

        * {
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
        }

        body {
            background-color: #fffffff7;
        }

        #in-search,
        #btn-search {
            border-radius: 0 20px 20px 0;
        }

        #btn-search {
            border-radius: 30px 0 0 30px;
        }

        #heading {
            /* -webkit-animation: color-change-2x 2s linear infinite alternate both;
            animation: color-change-2x 2s linear infinite alternate both; */
            border-radius: 0 0 22px 22px;
            background-color: rgb(255, 255, 255 , 0.9);
            opacity: 2;
        }

        #heading.scrolled {
            opacity: 1.0;
        }



        @-webkit-keyframes color-change-2x {
            0% {
                background: #ffffff;
            }

            100% {
                background: #547df8;
            }
        }

        span,
        p,
        label,
        li,
        ul {
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #000000;
            font-size: 19px;
            font-weight:normal;
        }



        #content-items {
            margin-top: 20px;
        }

        #content-img-posts-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #post-img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: block;
            margin: 0 auto;
        }

        #content {
            color: #d4d1d1;
        }

        #card-posts-menu {
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            border: 5px solid;
            border-radius: 20px;
            border-color: rgb(255, 255, 255);
            margin-bottom: 25px;
            box-shadow: 0 0 25px rgb(163, 160, 160);
        }

        #card-posts-menu:hover {
            transform: scale(1.05);
        }

        #card-posts-menu-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            width: 100%;
            height: 10rem;
            border-radius: 15px 15px 0 90px;
        }

        .card-body {
            padding: 15px;
            margin-bottom: 10px;
        }


        #posts-latest {
            background-color: #e9e8e8;
            border-radius: 10px 10px 10px 30px;
        }
    </style>

    @livewireStyles
</head>

<header>
    <nav id="heading" class="navbar fixed-top shadow navbar-expand-lg ">
        <div class="container-fluid">
            <a href="{{ route('home') }}" title="الرئيسيه">
                <img id="myImage" src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40"
                    alt="re" style="display: none;" />
                <div id="myProgressBar" class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mt-2">
                    <li class="nav-item h5">
                        <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'text-primary' : '' }}"
                            title="الرئيسيه">
                            {{ __('الرئيسية') }}
                        </a>

                    </li>
                    <li class="nav-item h5">
                        <a href="{{ route('categories.index') }}"
                            class="nav-link {{ Request::is('categories*') ? 'text-primary' : '' }}"
                            title="التصنيفات">{{ __('التصنيفات') }}</a>
                    </li>
                    {{-- foreach --}}
                    @foreach ($page as $item)
                        <li class="nav-item h5">
                            <a href="{{ route('page.show', ['title' => $item->title]) }} {{ Request::is('') }}"
                                class="nav-link " title="{{ $item->title }}">{{ $item->title }}</a>
                        </li>
                    @endforeach
                    {{-- end foreach --}}
                </ul>


                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">

                            <a class="btn btn-primary" href="{{ route('login') }}">الدخول</a>
                        </li>
                    @else
                        <li class="nav-item dropdown m-1 text-right">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{ __('خروج') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- @guest --}}

                                @auth
                                    @if (Auth::user()->isAdmin())
                                        <a href="{{ URL('admin/posts') }}" class="dropdown-item">التحكم</a>
                                        <a href="{{ route('settings.index') }}" class="dropdown-item">الاعدادات</a>
                                        <a href="{{ route('posts.create') }}" class="dropdown-item">اضافة مقاله</a>
                                        {{-- <a href="" class="dropdown-item">link</a> --}}
                                    @else
                                    @endif
                                @endauth
                                {{-- @endguest --}}
                            </div>
                        </li>


                    @endguest
                    <form class="d-flex" action="{{ route('search') }}" method="POST">
                        @csrf
                        <input name="query" class="form-control " type="search" aria-label="Search"
                            placeholder="search">
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>

</header>
