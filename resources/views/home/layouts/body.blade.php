@include('home.layouts.header')
<div>

    <body>
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
                        <h6>البحث</h6>
                        <div class="">
                            <form class="d-flex">
                                {{-- search part --}}
                                <input id="in-search" class="form-control me-2 shadow" type="search"
                                    placeholder="ابحث هنا" aria-label="Search">
                                <button id="btn-search" class="btn btn-outline-primary shadow"
                                    type="submit">بحث</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="container bg-light shadow p-3">
                        <h6>أحدث المقالات</h6>
                        <hr>
                        @if (isset($posts) && count($posts) > 0)
                            @foreach ($posts as $item)
                                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary ">
                                    <div class="list-group list-group-flush border-bottom scrollarea">
                                        <a href="{{ route('display', $item->id) }}"
                                            class="list-group-item list-group-item-action  {{ Route::currentRouteName() === 'display' && request()->route('id') == $item->id ? 'active ' : '' }}py-3 lh-sm"
                                            aria-current="true">

                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <img src="{{ $item->image_path }}" alt="النص البديل"
                                                    class="rounded-circle " width="30" height="30">
                                                <strong class=""> {{ $item->title }}
                                                </strong>
                                                <small>{{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}</small>
                                            </div>
                                            <div class="col-10 mb-1 small"> {{ Str::limit($item->exept, 110) }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>لا توجد مقالات حاليًا.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>

</div>

<footer>
    @include('home.layouts.footer')
</footer>

</html>
