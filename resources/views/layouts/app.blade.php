<!DOCTYPE html>
<html>
<header>
    @include('layouts.link')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="public/css/style.css">

    </head>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted text-white">
                        I am a blog test project developed by Laravel and other frameworks
                        for front end design
                    </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register-user') }}">Register</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('signout') }}">Logout</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{ route('/') }}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>
                <strong>blog</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </div>
</header>

<body id="body">
    {{-- Here the data inside (section image) is fetched by @yield image --}}
    @yield('image')
    <div class="row bg">
        <div class="col-lg-9 bg-light">
            {{-- Here the data inside (section Content) is fetched by @yield content --}}
            @yield('content')
        </div>
        <div id="categore" class="card col-lg-3 ">
            <br>
            {{-- here i used inclode to get style from categore page  --}}
            @include('layouts.categore')
        </div>
    </div>
</body>

<footer id="foot">
    @include('layouts.style')
    @yield('footer')
</footer>

</html>
