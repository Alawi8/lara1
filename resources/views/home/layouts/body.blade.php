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

            <div class="row rounded-3">

                <div class=" col-md-9 col-lg-9 col-sm-12 ">
                    <br>
                    {{-- <div id="myProgressBar" class="text-center">
                        <div  class="spinner-border" role="status">
                            <span  class="visually-hidden">Loading...</span>
                        </div>
                    </div> --}}
                    <div id="myProgressBar" class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div  class="progress-bar progress-bar-striped progress-bar-animated" style="width: 99%"></div>
                      </div>
                    
                    <!-- Your content goes here -->
                    <script>

                    </script>
                    {{-- Here the data inside (section Content) is fetched by @yield content --}}
                    @yield('content')
                </div>
                <div class=" col-md-3 col-sm-12 col-lg-3">
                    <br>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                    {{-- here i used inclode to get style from categore page  --}}
                    <form id="categure" class="d-flex" role="search" action="" method="GET">
                        {{-- @method(POST) --}}
                        @csrf
                        <div class="input-group">
                            <input id="in-search" class="form-control" type="search" name="title" placeholder="بحث"
                                aria-label="Search" value="" required>
                        </div>
                        <button id="cate-aleart-button" class="btn btn-outline-light bg-success"
                            type="submit">البحث</button>
                    </form>


                    <div id="categure" class="card">
                        <a id="cate-aleart" class="alert alert-secondary"
                            href="{{ route('categories.index') }}">التصنيفات
                        </a>
                        <tr class="list-group ">
                            @if (isset($categories))
                                @foreach ($categories as $category)
                                    <div>
                                        <a class="text-center btn btn-light nav-link"
                                            href="#">{{ $category->name }}</a>
                                        <h2></h2>
                                        {{-- <p>No posts in this category.</p> --}}
                                    </div>
                                @endforeach
                            @else
                                <p>لايوجد تصنيفات</p>
                            @endif
                        </tr>
                    </div>

                    <div id="categure" class="card ">
                        <div id="cate-aleart" class="alert alert-secondary">
                            الصفحات
                        </div>
                        <tr class="list-group ">
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link " href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                        </tr>
                    </div>

                    <div id="categure" class="card ">
                        <div id="cate-aleart" class="alert alert-secondary">
                            الاكثر قراءه
                        </div>
                        <tr class="list-group ">
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link " href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                        </tr>
                    </div>

                    <div id="categure" class="card ">
                        <div id="cate-aleart" class="alert alert-secondary">
                            احدث المقالات
                        </div>
                        <tr class="list-group ">
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                            <a class="text-center btn btn-light nav-link" href="#">link</a>
                        </tr>
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
