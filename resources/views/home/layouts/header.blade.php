<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('exept')">
    <meta name="author" content="@yield('author')">
    <meta name="generator" content="Hugo 0.101.0">

</head>


<header>
    {{-- style bootstrap --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <div id="heading" class="navbar navbar shadow-sm py-4 fixed-top">
        <div class="container">
            <a href="{{ route('home') }}" class=" ">
                <img id="style-icon"
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0xMS41IC0xMC4yMzE3NCAyMyAyMC40NjM0OCI+CiAgPHRpdGxlPlJlYWN0IExvZ288L3RpdGxlPgogIDxjaXJjbGUgY3g9IjAiIGN5PSIwIiByPSIyLjA1IiBmaWxsPSIjNjFkYWZiIi8+CiAgPGcgc3Ryb2tlPSIjNjFkYWZiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIi8+CiAgICA8ZWxsaXBzZSByeD0iMTEiIHJ5PSI0LjIiIHRyYW5zZm9ybT0icm90YXRlKDYwKSIvPgogICAgPGVsbGlwc2Ugcng9IjExIiByeT0iNC4yIiB0cmFuc2Zvcm09InJvdGF0ZSgxMjApIi8+CiAgPC9nPgo8L3N2Zz4K"width="40"
                    height="32" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="collapse" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4>About</h4>
                        <p class="text-muted ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sed maiores eos facilis
                            eaque
                            dolor, expedita recusandae eius sequi aspernatur reprehenderit temporibus praesentium?
                            Eos
                            fugit, delectus eveniet eum praesentium dignissimos!
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <ul class="navbar-nav">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register-user') }}">Register</a>
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
            ffff
        </div>
    </div>
</header>

<br>
<br>
<br>
<br>
@guest
@else
    @if (Auth::user()->role == 2)
        <div>
            <!-- loads the entire Variable Font -->
            <link
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
                rel="stylesheet" />

            <!-- thin outlined icons -->
            <div style="font-variation-settings: 'FILL' 0, 'wght' 100, 'GRAD' 0, 'opsz' 48;">
                <a href="{{ route('dash.dashboard') }}"
                    class="bg-dark rounded-3 nav-link text-light material-symbols-outlined" title="التحكـم">home</a>
                <a href="#" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="الاعدادات">settings</a>
                <a href="#" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="الحساب">account_circle</a>
                <a href="#" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
                    title="الايميل">mail</a>
                <a href="{{ route('dash.create') }}" class="bg-dark rounded-3 nav-link text-light material-symbols-outlined"
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
