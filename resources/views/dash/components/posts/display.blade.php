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

        <div class="row">
            <div class="col-12">
                <a href="{{ route('dash.create') }}" class="btn btn-primary bg-gradient-primary ">كتابة مقاله</a>
                <div class="card my-4">
                    <div class="card-header p-0 position-relative  z-index-2">
                        <div class="bg-dark shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">المقالات</h6>
                        </div>
                    </div>
                    <p id="root"></p>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">العنوان</th>
                                    <th scope="col">الكاتب</th>
                                    <th scope="col">الحاله</th>
                                    <th scope="col">التاريخ</th>
                                    <th scope="col">الساعه</th>
                                    <th scope="col">الاجراءات</th>
                                </tr>
                            </thead>
                            @if (isset($posts))
                                @foreach ($posts as $post)
                                    <tbody>
                                        <tr>
                                            <td> <img src="{{ $post->image_path }}" class="img-thumbnail" alt="...">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->writer }}</td>
                                            <td>
                                                Online
                                            </td>
                                            <td>{{ $post->time }}</td>
                                            <td>Paid</td>
                                            <td><a class="btn btn-sm btn-primary"
                                                    href="{{ route('dash.edit', $post->id) }}">تعديل</a></td>
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
