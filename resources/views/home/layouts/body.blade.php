<!DOCTYPE html>
<html lang="ar" dir="rtl">
@include('home.layouts.header')

<style>
    body {
        background-color: #f8f9fa;
    }

    #categure {
        margin-top: 20px;
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

</style>

<div class="">
    <body>
        {{-- Here the data inside (section image) is fetched by @yield image --}}
        <div class="container-fluid">

            {{-- @include('home.pages.learning') --}}
            <div class="row rounded-3">
                <div class=" col-md-9 col-lg-9 col-sm-12 ">
                    <br>
                    {{-- Here the data inside (section Content) is fetched by @yield content --}}
                    @yield('content')
                </div>
                <div class=" col-md-3 col-sm-12 col-lg-3">
                    <br>
                    {{-- here i used inclode to get style from categore page  --}}

                    <form id="categure" class="d-flex" role="search">
                        <input id="in-search" class="form-control" type="search" placeholder="بحث" aria-label="Search">
                        <button id="cate-aleart-button" class="btn btn-outline-light bg-success"
                            type="submit">البحث</button>
                    </form>
                    <div id="categure" class="card">
                        <div id="cate-aleart" class="alert alert-secondary">الرياضه
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
                            البرامج
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
                            لينكس
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
                            مقالات
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
        

    <h1>Categories</h1>



    </body>
</div>

<footer>
    @include('home.layouts.footer')
</footer>

</html>
