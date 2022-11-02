@include('home.layouts.header')
<div id="body">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T35QRXW" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- Here the data inside (section image) is fetched by @yield image --}}
    <div class="container-fluid">
        <div class="row bg">
            {{-- @yield('image') --}}
            {{-- @include('home.layouts.image') --}}

            <div class="col-lg-9 bg-light">
                {{-- Here the data inside (section Content) is fetched by @yield content --}}
                fffffffffffffffffffffffffffff
                @yield('content')
            </div>
            <div id="categore" class="card col-lg-3">
                <br>
                {{-- here i used inclode to get style from categore page  --}}
                @include('home.layouts.categore')
            </div>
        </div>
    </div>
</div>

<footer>
    @include('home.layouts.footer')
</footer>
