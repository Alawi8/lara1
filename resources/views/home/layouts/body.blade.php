@include('home.layouts.header')
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KMV6F7X" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        {{-- Here the data inside (section image) is fetched by @yield image --}}
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 ">
                    {{-- Here the data inside (section Content) is fetched by @yield content --}}
                    <h6>@yield('title')</h6>
                    @yield('content')
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div>
                        <h1>البحث</h1>
                        <div class="">
                            @livewire('search-form')
                            {{-- <form class="d-flex" action="{{ route('search') }}" method="POST">
                                @csrf
                                <input id="in-search" name="query" class="form-control me-2 shadow" type="search"
                                    placeholder="ابحث هنا" aria-label="Search">
                                <button id="btn-search" class="btn btn-primary shadow" type="submit">بحث</button>
                            </form> --}}
                        </div>
                    </div>
                    <br>
                    @livewire('home-data')
                </div>
            </div>
        </div>
        @livewireScripts
    </body>

<footer>
    @include('home.layouts.footer')
</footer>

</html>
