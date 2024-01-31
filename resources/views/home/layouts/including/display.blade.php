@extends('home.layouts.body')

@section('content')
    <div id="content-img-posts-card" class="text-center">
        <img id='post-img ' src="{{ $dis_posts->image_path }}" alt="{{ $dis_posts->title }}" class="img-fluid rounded">
    </div>
    <section id = 'hero'>

    </section>

    <div class="card">
        <div class="card-header" id="headingOne">
            <h1 class="mb-0">
                {{ $dis_posts->title }}
            </h1>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                {!! $dis_posts->content !!}
            </div>
        </div>
    </div>
    {{-- comments part  --}}
    <div id="content-items" class="container">
        <section>
            <h1>التعليقات:</h1>
            <form action="{{ route('comments.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-10">
                        <textarea class=" form-control" name="body" rows="1" placeholder="أدخل تعليقك هنا"></textarea>
                        <input type="hidden" name="post_id" value="{{ $dis_posts->id }}">

                    </div>
                    <div class="col-1">

                        <button type="submit" class="btn btn-primary ">أرسال</button>
                    </div>
                    <br>
                </div>
            </form>
            @if (isset($comments))
                @foreach ($comments as $comment)
                    <div class="container my-1 py-1 text-dark">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-11 col-lg-9 col-xl-7 col-sm-12">
                                <div class="d-flex flex-start">
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
    </div>
@endsection
