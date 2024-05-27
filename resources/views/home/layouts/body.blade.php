@include('home.layouts.header')

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KMV6F7X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- Here the data inside (section image) is fetched by @yield image --}}

    <div class="container-fluid">
        <div class="row ">



            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12">
                {{-- استيراد محتوى الصفحة --}}
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a class="nav-link" href="{{ route('home') }}" title="الرئيسية">الرئيسية</a></li>
                    @yield('link')
                </ul>

                @yield('content')
            </div>


            <div class="col-md-3 col-lg-3 col-sm-12">
                <div>
                    <h2>البحث</h2>
                    <div >
                        <form class="d-flex" action="{{ route('search') }}" method="POST">
                            @csrf
                            <input name="query" class="form-control " type="search" aria-label="Search">
                        </form>

                    </div>
                </div>
                <br>
                {{-- @livewire('home-data') --}}
            </div>
        </div>
    </div>
    @livewireScripts


</body>


@include('home.layouts.footer')


</html>
