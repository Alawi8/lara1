@extends('home.layouts.body')
@section('title')
    {{ $dis_posts->title }}
@endsection
@section('exept')
    {{ $dis_posts->exept }}
@endsection
@section('author')
    {{ config('app.name') }}
@endsection

@section('content')
    <style>
        /* Add your custom CSS styles here */

        #content-items {
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        #content-img-posts-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #post-img {
            max-width: 100%;
            /* Make the image responsive */
            max-height: 400px;
            /* Set a maximum height for the image */
            width: auto;
            height: auto;
            border-radius: 8px;
            /* Add border-radius for rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Add box-shadow for a subtle effect */
            display: block;
            /* Remove default image spacing */
            margin: 0 auto;
            /* Center the image */
        }

        #content {
            line-height: 1.6;
            font-size: 16px;
            color: #555;
        }
    </style>

    <div id="content-items" class="container-fluid">
        <h1 class="my-4">{{ $dis_posts->title }}</h1>

        <div id="content-img-posts-card" class="rounded-4 text-center mb-4">
            <img id='post-img' src="{{ $dis_posts->image_path }}" alt="{{ $dis_posts->title }}" class="img-fluid rounded">
        </div>

        <div id="content" class="mb-4">
            {!! $dis_posts->content !!}
        </div>
    </div>

    <!-- عرض التعليقات -->
    <h2>التعليقات</h2>
    {{-- @foreach ($post->comments as $comment) --}}
        {{-- <p>{{ $comment->content }}</p> --}}
    {{-- @endforeach --}}

    <!-- رابط لإرسال تعليق -->

<form action="{{ route('comments.store') }}" method="post">
    @csrf
    <textarea name="content" rows="4" cols="50"></textarea>
    <input type="hidden" name="post_id" value="{{ $dis_posts->id }}">
    <button type="submit">أرسل التعليق</button>
</form>
@endsection
