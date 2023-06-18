@extends('dash.layouts.header')
@section('title')
    عرض المقالات
@endsection
@section('content')
    <style>
        .img-thumbnail {
            width: 10rem;
            height: 5rem;
        }
    </style>
    <div class="container-fluid py-4">

        <div class="row ">
            <div class="col-12 ">
                <a href="{{ route('dash.create') }}" class="btn btn-primary bg-gradient-primary ">كتابة مقاله</a>
                <div class="card my-4">
                    <div class="card-header p-0 position-relative  z-index-2 bg-dark">
                        <div class=" shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3 ">المقالات</h6>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 ">
                            <thead class="text-center bg-danger ">
                                <tr class="text-dark">
                                    <th scope="col"></th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">الكاتب</th>
                                    <th scope="col">الحاله</th>
                                    <th scope="col">التاريخ</th>
                                    <th scope="col">الساعه</th>
                                    <th scope="col">التصنيف</th>
                                </tr>
                            </thead>
                            @if (isset($posts))
                                @foreach ($posts as $post)
                                    <tbody class="text-center">
                                        <tr>
                                            <td> <img src="{{ $post->image_path }}" class="img-thumbnail" alt="...">
                                            </td>
                                            <td>{{ $post->title }}
                                                <br>
                                                <a href="{{ route('dash.edit', $post->id) }}" class="badge rounded-pill text-bg-info">تعديل</a>
                                                <a href="{{ route('dash.edit', $post->id) }}" class="badge rounded-pill text-bg-danger">حذف</a>

                                            </td>
                                            <td>{{ $post->writer }}</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">ONLINE</span>
                                            </td>
                                            <td>{{ $post->date }}</td>
                                            <td>{{ $post->time }}</td>
                                            <td>

                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
