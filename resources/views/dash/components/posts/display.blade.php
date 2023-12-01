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




    <div class="container">
        @if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

        <a href="{{ route('posts.create') }}" class="btn btn-primary bg-gradient-primary ">كتابة مقاله</a>
        <table class="table ">
            <thead>
                <tr class="text-dark ">
                    <th scope="col"></th>
                    <th scope="col">العنوان</th>
                    <th class="" scope="col">الكاتب</th>
                    <th class="" scope="col">الحاله</th>
                    <th class="" scope="col">التاريخ</th>
                    <th class="" scope="col">الساعه</th>
                    <th class="" scope="col">التصنيف</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($posts))
                    @foreach ($posts as $post)
                        <tr>
                            <td scope="row"><img src="{{ $post->image_path }}" class="img-thumbnail d-none d-lg-block" alt="..."></td>
                            <td>{{ $post->title }}
                                <br>
                                <div class="d-flex p-2">
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="btn badge rounded-pill text-bg-info">تعديل</a>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf


                                        <!-- Modal -->
                                       
                                        <button class="btn badge rounded-pill text-bg-danger" type="submit">حذف</button>
                                    </form>
                                </div>
                            </td>
                            <td >{{ $post->writer }}</td>
                            <td ><span class="badge rounded-pill text-bg-success">ONLINE</span></td>
                            <td >{{ $post->date }}</td>
                            <td >{{ $post->time }}</td>
                            <td >@mdo</td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
