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


<nav id="heading" class="navbar bg-body-tertiary fixed-top">
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
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('login') }}">دخول</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('register-user') }}">تسجيل</a>
                            </li>
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
<br>
@guest
@else
    @if (Auth::user()->role << 0)
        <div class ="row">
            <!-- loads the entire Variable Font -->

            <!-- thin outlined icons -->
            <div style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 0, 'opsz' 48;">
                <a href="{{ URL('admin/posts') }}" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="التحكـم">home</a>
                <a href="#" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="الاعدادات">settings</a>
                <a href="{{ route('settings.index') }}"
                    class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="الحساب">account_circle</a>
                <a href="#" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="الايميل">mail</a>
                <a href="#" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="اضف مقاله">add_circle</a>
                <a href="{{ route('signout') }}" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="خروج">logout</a>

            </div>
        </div>
    @else
        <div style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 0, 'opsz' 48;">
            <a href="{{ route('signout') }}" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                title="خروج">logout</a>
        </div>
    @endif
@endguest
<style>
    #content img {
    vertical-align: middle
}

#content {
    word-wrap: break-word
}

#body {
    width: 100%
}

#heading {
    -webkit-animation: color-change-2x 2s linear infinite alternate both;
    animation: color-change-2x 2s linear infinite alternate both;
    border-color: rgb(0, 0, 0);
    border-radius: 0 0 12px 12px;
    width: 100%;
    vertical-align: middle
}

/* @-webkit-keyframes color-change-2x {
    0% {
        background: #f6f6f6
    }

    100% {
        background: #b352eb
    }
}

@keyframes color-change-2x {
    0% {
        background: #f0f0f0
    }

    100% {
        background: #b964eb
    }
} */

#card-content-posts {
    width: 100%;
    height: 22rem;
    max-zoom: 99px
}

/* #style-icon {
    animation-name: example;
    animation-duration: 3s;
    animation-iteration-count: 2222
} */

/* @keyframes example {
    0% {
        transform: rotate(0deg)
    }

    100% {
        transform: rotate(360deg)
    }
} */

#categure {
    border: 5px solid;
    border-radius: 20px 20px 20px 20px;
    border-color: rgb(255, 255, 255);
    margin-bottom: 25px;
    box-shadow: 0 0 25px rgb(163, 160, 160)
}

#card-posts-menu {
    border: 5px solid;
    border-radius: 20px 20px 20px 20px;
    border-color: rgb(255, 255, 255);
    margin-bottom: 25px;
    box-shadow: 0 0 25px rgb(163, 160, 160)
}

#card-posts-menu-img {
    width: 100%;
    height: 10rem;
    border-radius: 20px 20px 0 90px
}

#cate-aleart {
    border-radius: 30px 30px 0 70px
}

#cate-aleart-button {
    border-radius: 20px 0 0 20px
}

#in-search {
    border-radius: 0 20px 20px 0
}

#input_seo {
    height: 50%
}
</style>