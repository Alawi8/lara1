@extends('home.layouts.body')
@section('title')
    {{$dis_posts->title}}
@endsection
@section('link')
    <a class="nav-link" href="{{ route('display', ['title' => str_replace(' ', '_', $dis_posts->title)]) }}"
        title="{{ $dis_posts->title }}">{{ $dis_posts->title }}</a>
@endsection

@section('content')
    <div id="content-img-posts-card" class="text-center">
        <img id='post-img ' src="{{ $dis_posts->img_url }}" alt="{{ $dis_posts->title }}" class="img-fluid rounded">
    </div>
    {{-- adsens --}}
    <amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-6477832805856369" data-ad-slot="7840778603"
        data-auto-format="rspv" data-full-width="">
        <div overflow=""></div>
    </amp-ad>
    {{-- end adsens --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h1 class="mb-0">
                {{ $dis_posts->title }}
            </h1>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

                {{-- adsens --}}
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6477832805856369"
                    crossorigin="anonymous"></script>
                <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article"
                    data-ad-format="fluid" data-ad-client="ca-pub-6477832805856369" data-ad-slot="7007839397"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                {{-- end adsens --}}
                {!! $dis_posts->content !!}
            </div>
        </div>
    </div>

    {{-- adsens --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6477832805856369"
        crossorigin="anonymous"></script>
    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-6t+ed+2i-1n-4w"
        data-ad-client="ca-pub-6477832805856369" data-ad-slot="2946957845"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    {{-- end adsens --}}

    {{-- comments part  --}}
    <div id="content-items" class="container">
        <section>
            <h2>التعليقات:</h2>
            @guest
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                يرجى تسجيل الدخول لكتابة التعليقات.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="mt-3">
                  <a href="{{ route('login') }}" class="btn btn-primary">تسجيل الدخول</a>
                  <a href="{{ route('register') }}" class="btn btn-secondary">إنشاء حساب</a>
                </div>
              </div>
                            
            @endguest
            @auth
                <form action="{{ route('comments.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-10">
                            <textarea class=" form-control" name="body" rows="4" placeholder="أدخل تعليقك هنا"></textarea>
                            <input type="hidden" name="post_id" value="{{ $dis_posts->id }}">
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-primary ">أرسال</button>
                        </div>
                        <br>
                    </div>
                </form>
            @endauth

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
