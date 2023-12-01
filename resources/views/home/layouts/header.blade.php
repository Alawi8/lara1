<!DOCTYPE html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('exept')">
    <meta name="author" content="@yield('author')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="generator" content="Hugo 0.101.0">

</head>


<header>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- style bootstrap --}}
    {{-- Bootstrap  v5.2.2 (https://getbootstrap.com/) --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>  --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <!-- include summernote css/js -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}
    {{-- Vue fremwork cdn --}}
    {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}

</header>


<nav id="heading" class="navbar bg-body-tertiary fixed-top ">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class=" ">
            <img id="style-icon"
                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K"width="40"
                height="32" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href="{{ route('home') }}" class=" ">
                    <img id="style-icon"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K"width="40"
                        height="32" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
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
                <div class="col-sm-4 offset-md-1 py-4">
                    <ul class="navbar-nav">
                        @guest
                            <div class="alert alert-info" role="alert">
                                <i class="bi bi-info-circle-fill"></i> أنت غير مسجل الدخول. من فضلك <a href="{{ route('login') }}">قم بتسجيل الدخول</a> أو <a href="{{ route('register-user') }}">قم بالتسجيل</a>.
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
    @if (Auth::user()->role > 0)
    
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
