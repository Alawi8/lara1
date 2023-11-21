<!DOCTYPE html>
<html lang="ar" dir="rtl">
    @include('home.layouts.header')
<div class="bg-light">

    <body id="body">
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW7PKVB" height="0" width="0"
                style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        {{-- Here the data inside (section image) is fetched by @yield image --}}
        <div class="container-fluid">

            {{-- @include('home.pages.learning') --}}
            <div id="menu-content" class="row rounded-3">
                <div class=" col-md-9 col-lg-9 col-sm-12 ">
                    <br>
                    {{-- Here the data inside (section Content) is fetched by @yield content --}}
                    @yield('content')
                </div>
                <div id="categore" class=" col-md-3 col-sm-12 col-lg-3">
                    <br>
                    {{-- here i used inclode to get style from categore page  --}}
                    @include('home.layouts.categore')
                </div>
            </div>
        </div>
    </body>
</div>
<footer>
    @include('home.layouts.footer')
</footer>

</html>
