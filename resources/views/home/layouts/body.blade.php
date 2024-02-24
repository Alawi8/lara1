@include('home.layouts.header')

<body >

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KMV6F7X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- Here the data inside (section image) is fetched by @yield image --}}
    
    <div class="container-fluid">
        <div class="row p-3">
            <div class="text-center p-3 mb-1 bg-body-tertiary rounded" >
                <h1 style="font-size: 25px ;font-weight:normal; ">@yield('title')</h1>
            </div>


            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 ">
                {{-- Here the data inside (section Content) is fetched by @yield content --}}
                    <ul class="breadcrumb">
                        <a class="nav-link " href="{{ route('home') }}" title="الرئيسيه">الرئيسيه <span
                                class="mx-3">|</span></a>
                        @yield('link')
                    </ul>

                @yield('content')
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12">
                <div>
                    <h1>البحث</h1>
                    <div class="">
                        @livewire('search-form')

                    </div>
                </div>
                <br>
                @livewire('home-data')
            </div>
        </div>
    </div>
    @livewireScripts
</body>


@include('home.layouts.footer')


</html>
