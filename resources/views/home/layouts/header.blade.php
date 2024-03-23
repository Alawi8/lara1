<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate(true) !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/bitmap.png') }}">
    {{-- font link --}}
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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

    {{-- amp to google adsenes --}}
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

    <style>


        * {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            color: #000000;
            font-size: 19px;
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
            background-color: rgb(255, 255, 255, 0.9);
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



        h1 {
            color: #000000;
            font-size: 22px;
        }

        h2 {
            color: #000000;
            font-size: 20px;

        }

        h3 {
            color: #000000;
            font-size: 18px;
        }

        @media screen and (max-width: 768px) {
            body {
                font-size: 1.2em;
            }
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

        /* إضافة أنماط إضافية حسب احتياجاتك */
    </style>


    @livewireStyles
</head>

<header>
    @livewire('pages-list')


    <br>
    <br>
    <br>
    <div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6477832805856369"
            crossorigin="anonymous"></script>
        <amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-6477832805856369"
            data-ad-slot="8395312373" data-auto-format="rspv" data-full-width="">
            <div overflow=""></div>
        </amp-ad>
    </div>

</header>
