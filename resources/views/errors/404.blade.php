@extends('home.layouts.body')
@section('title', '404')
    <style>
        h1{
            color:#263238;
        }
    </style>
@section('content')

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12 align-self-center">
            <h1 class="display-3">404 - لا يوجد صفحة</h1>
            <p class="display-6">عذرًا، الصفحة التي تبحث عنها غير موجودة!</p>
            <div class="mx-auto">
                <a href="{{route('home')}}"  >
                    <div class="btn btn-lg text-light " style="background-color: #263238">
                        انتقل للصفحه الرئيسيه
                    </div>

                </a>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <img class="img-fluid" src="{{asset('assets/img/Group 307.png')}}" alt="صورة تعريفية">
        </div>

    </div> --}}

    <div style="position: relative; width: 100%; height: 0; padding-top: 56.2225%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF9uNNpZKE&#x2F;QAioW36QBsKeYB7IR5uInA&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF9uNNpZKE&#x2F;QAioW36QBsKeYB7IR5uInA&#x2F;view?utm_content=DAF9uNNpZKE&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> 
        
</div>

@endsection
