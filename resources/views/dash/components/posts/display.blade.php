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

    
    <div class="container-fluid py-4 ">
        <a href="{{ route('posts.create') }}" class="btn btn-primary bg-gradient-primary ">كتابة مقاله</a>
        <table class="table ">
            <thead>
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
            <tbody>
                @if (isset($posts))
                    @foreach ($posts as $post)
                        <tr>
                            <td scope="row"><img src="{{ $post->image_path }}" class="img-thumbnail" alt="..."></td>
                            <td>{{ $post->title }}
                                <br>
                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="badge rounded-pill text-bg-info">تعديل</a>
                                <a href="{{ route('posts.destroy', $post->id) }}"
                                    class="badge rounded-pill text-bg-danger">حذف</a>
                            </td>
                            <td>{{ $post->writer }}</td>
                            <td><span class="badge rounded-pill text-bg-success">ONLINE</span></td>
                            <td>{{ $post->date }}</td>
                            <td>{{ $post->time }}</td>
                            <td>@mdo</td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
