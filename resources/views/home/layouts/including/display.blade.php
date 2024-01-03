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
    <div id="content-img-posts-card" class="rounded-4 text-center mb-4">
        <img id='post-img' src="{{ $dis_posts->image_path }}" alt="{{ $dis_posts->title }}" class="img-fluid rounded">
    </div>
    <div class="card">
        <div class="card-header" id="headingOne">
            <h4 class="mb-0">
                {{ $dis_posts->title }}
            </h4>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                {!! $dis_posts->content !!}
            </div>
        </div>
    </div>
    {{-- comments part  --}}
    <div id="content-items" class="container">
        @if (isset($comments))
            <section style="background-color: #e7effd;">
                <h4>التعليقات:</h4>
                @foreach ($comments as $comment)
                <div class="container my-5 py-5 text-dark">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-11 col-lg-9 col-xl-7 col-sm-12">
                                <div class="d-flex flex-start">
                                    <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp" alt="avatar"
                                        width="65" height="65" />
                                    <div class="card w-100">
                                        <div class="card-body p-4">
                                            <div class="">
                                                <h5> {{ $comment->name }}
                                                </h5>
                                                <p class="small">
                                                    {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                                                <p>
                                                    {{ $comment->body }}
                                                </p>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#!" class="link-muted me-2"><i
                                                                class="fas fa-thumbs-up me-1"></i>حذف</a>
                                                        <a href="#!" class="link-muted"><i
                                                                class="fas fa-thumbs-down me-1"></i>تعديل</a>
                                                    </div>
                                                    <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </section>
        @endif

        <form action="{{ route('comments.store') }}" method="post">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="body" rows="6" placeholder="أدخل تعليقك هنا"></textarea>
            </div>
            <input type="hidden" name="post_id" value="{{ $dis_posts->id }}">
            <br>
            <button type="submit" class="btn btn-primary ">أرسل التعليق</button>
        </form>
    </div>
@endsection
