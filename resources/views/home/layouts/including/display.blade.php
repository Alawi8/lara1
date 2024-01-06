@extends('home.layouts.body')
{{-- @section('title'){{ $dis_posts->title }}@endsection
@section('exept'){{ $dis_posts->exept }}@endsection
@section('author'){{ config('app.name') }}@endsection --}}

@section('content')
    <style>
        /* Add your custom CSS styles here */

        #content-items {
            margin-top: 20px;
        }

        h1 {
            color: #333;
            font-size: 22px;
        }

        #content-img-posts-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #post-img {
            max-width: 100%;
            /* Make the image responsive */
            max-height: 100%;
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
        #hero {
    background-image: url('https://www.meshcah.net/storage/img/1701773513.webp');
    background-size: cover; /* Adjust based on your requirements */
    background-position: center; /* Adjust based on your requirements */
    background-repeat: no-repeat;
    background-attachment: fixed; /* This is where you set background-attachment */
    /* Additional styling if needed */
}

    </style>
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
        @if (isset($comments))
            <section>
                <h4>التعليقات:</h4>
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
