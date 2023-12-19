<!DOCTYPE html>
<html lang="ar" dir="rtl">
@include('home.layouts.header')

<style>
    body {
        background-color: #f8f9fa;
    }

    #in-search {
        border-radius: 5px 0 0 5px;
    }

    #cate-aleart {
        background-color: #6c757d;
        color: #fff;
        text-align: center;
        font-weight: bold;
        border-radius: 5px;
        padding: 5px;
        margin-bottom: 10px;
    }

    .list-group a {
        margin: 5px 0;
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #content img {
        vertical-align: middle
    }

    #content {
        word-wrap: break-word
    }

    #body {
        width: 100%
            /* text-color : black ; */
    }

    #heading {
        -webkit-animation: color-change-2x 2s linear infinite alternate both;
        animation: color-change-2x 2s linear infinite alternate both;
        border-color: rgb(0, 0, 0);
        border-radius: 0 0 12px 12px;
        width: 100%;
        vertical-align: middle
    }

    @-webkit-keyframes color-change-2x {
        0% {
            background: #f6f6f6
        }

        100% {
            background: #b352eb
        }
    }

    @keyframes color-change-2x {
        0% {
            background: #f0f0f0
        }

        100% {
            background: #b964eb
        }
    }

    #card-content-posts {
        width: 100%;
        height: 22rem;
        max-zoom: 99px
    }

    #style-icon {
        animation-name: example;
        animation-duration: 3s;
        animation-iteration-count: 2222
    }

    @keyframes example {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    #categure {
        border: 5px solid;
        border-radius: 20px 20px 20px 20px;
        border-color: rgb(255, 255, 255);
        margin-bottom: 25px;
        box-shadow: 0 0 25px rgb(163, 160, 160)
    }


    #cate-aleart {
        border-radius: 30px 30px 0 70px
    }

    #cate-aleart-button {
        border-radius: 20px 0 0 20px
    }

    #in-search {
        border-radius: 0 20px 20px 0
    }

    #input_seo {
        height: 50%
    }
</style>

<div>

    <body>
        {{-- Here the data inside (section image) is fetched by @yield image --}}
        <div class="container-fluid">

            <div class="row rounded-3 p-3">

                <div class=" col-md-9 col-lg-9 col-sm-12 ">
                    {{-- Here the data inside (section Content) is fetched by @yield content --}}
                    @yield('content')
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="p-2">
                        <h6>أحدث المقالات</h6>
                        @if (isset($posts) && count($posts) > 0)
                            @foreach ($posts as $item)
                                <ul class="list-group ">
                                        <a href="{{ route('display', $item->id) }}"
                                            class="list-group-item list-group-item-action {{ Route::currentRouteName() === 'display' && request()->route('id') == $item->id ? 'active ' : '' }}">
                                            {{ $item->title }}
                                        </a>
                                </ul>
        
                            @endforeach
                        @else
                            <p>لا توجد مقالات حاليًا.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>

</div>

<footer>
    @include('home.layouts.footer')
</footer>

</html>
