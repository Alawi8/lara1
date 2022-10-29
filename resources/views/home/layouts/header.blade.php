<!DOCTYPE html>
<html lang="ar" dir="rtl">
<header>
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
        })(window, document, 'script', 'dataLayer', 'GTM-T35QRXW');
    </script>
    <!-- End Google Tag Manager -->
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('../../laravel/public/css/bootstrap.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('../../laravel/public/css/style.css') }}">


    <div id="heading" class="navbar navbar shadow-sm py-4 fixed-top">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                <strong>مدونه</strong>
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sed maiores eos facilis eaque
                            dolor, expedita recusandae eius sequi aspernatur reprehenderit temporibus praesentium? Eos
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
        </div>
    </div>
</header>
<br>
<br>
<br>
<br>

</html>
