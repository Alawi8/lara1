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
    <div class="container p-3">
        @if (session('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>

            <script>
                // انتظر 5 ثوانٍ ومن ثم قم بإخفاء العنصر
                setTimeout(function() {
                    document.getElementById('success-alert').style.display = 'none';
                }, 5000); // 5000 مللي ثانية تعني 5 ثوانٍ
            </script>
        @endif

        <a href="{{ route('posts.create') }}" class="btn btn-primary bg-gradient-primary ">كتابة مقاله</a>
        <table class="table ">
            <thead>
                <tr class="text-dark ">
                    <th scope="col"></th>
                    <th scope="col">العنوان</th>
                    <th class="col" scope="col">الكاتب</th>
                    <th class="col" scope="col">الحاله</th>
                    <th class="col" scope="col">التاريخ</th>
                    <th class="col" scope="col">الساعه</th>
                    <th class="col" scope="col">التصنيف</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($posts))

                    @foreach ($posts as $post)
                        <tr>
                            <td scope="row"><img src="{{ $post->img_url }}" class="img-thumbnail d-none d-lg-block"
                                    alt="..."></td>
                            <td>{{ $post->title }}
                                <br>
                                <div class="d-flex p-2">
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="btn badge rounded-pill text-bg-info">تعديل</a>

                                    <form id="deleteForm{{ $loop->index }}"
                                        action="{{ route('posts.destroy', $post->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf


                                        <!-- Modal -->

                                        <button class="btn badge rounded-pill text-bg-danger" type="submit">حذف</button>

                                    </form>
                                </div>
                            </td>
                            <td>{{ $post->writer }}</td>
                            <td><span class="badge rounded-pill text-bg-success">ONLINE</span></td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td></td>
                        </td>

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
