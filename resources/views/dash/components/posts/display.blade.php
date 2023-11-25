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
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn badge rounded-pill text-bg-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                           حذف
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">حذف :
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        عندما تضغط على الحذف سيتم حذف المقال بشكل نهائي
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">تراجع</button>
                                                        <button class="btn btn-primary" type="submit">حذف</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    </div>
@endsection
