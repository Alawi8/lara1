@extends('dash.layouts.header')

@section('content')



    <!DOCTYPE html>
    <html lang="en">

    <body id="page-top">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">الازرار</h1>

            <div class="row">

                <div class="col-lg-12">
                    <div class="btn btn-primary">
                        <a class="nav-link" href="{{ route('dash.create') }}">اضف مقاله</a>
                    </div>
                    <!-- Circle Buttons -->
                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">عرض المقالات</h6>
                        </a>
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg col-sm">
                                            <table class="table table-bordered col-sm-12 col-md-12 col-xxl col-xl " id="dataTable"
                                                width="100%" cellspacing="0">
                                                <thead class="text-primary bg-danger text-light text-center">
                                                    <tr>
                                                        <th>الرقم</th>
                                                        <th>العنوان</th>
                                                        <th>الكاتب</th>
                                                        <th>الوقت</th>
                                                    </tr>
                                                </thead>
                                                @if (isset($posts))
                                                    @foreach ($posts as $post)
                                                        <tr>
                                                            <th>{{ $post->id }}</th>
                                                            <th>{{ $post->title }}</th>
                                                            <th>{{ $post->writer }}</th>
                                                            <th>{{ $post->time }}</th>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                <tfoot class="text-primary bg-danger text-light text-center">
                                                    <tr>
                                                        <th>الرقم</th>
                                                        <th>العنوان</th>
                                                        <th>الكاتب</th>
                                                        <th>الوقت</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Brand posts -->
                    {{-- <div class="card shadow mb-4 col-sm-12 col-md-12 col-lg-12">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Brand Buttons</h6>
                        </div>
                        <div class="card-body">
                            @if (isset($posts))
                                @foreach ($posts as $post)
                                    <tr>
                                        @php
                                            echo $post->content 
                                        @endphp
                                    </tr>
                                @endforeach
                                @else
                                    مافي
                               
                            @endif
                            </p>
                        </div>
                    </div> --}}
                    <!--end brand posts-->
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
