@extends('dash.layouts.header')

@section('content')
    <!DOCTYPE html>
    <html lang="ar" dir="rtl">

    <head>
        <meta charset="utf-8" />
        <!-- Firebase -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>


    <body id="page-top">
        <div class="row">
            <div class="col-12">
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body col-12">
                        <div class="row">
                            <form action="{{ route('dash.SeoPost', $editing->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <small id="helpId" class="form-text text-muted">في حال الرغبه بتحسين seo قم بنسخ هذا النص
                                    ولصقه في محرر اكواد وبعد اجراء التحسينات قم بلصقه هنا واضغط على نشر</small><br><br>
                                <textarea name="content" type="text" dir="ltr" class="form-control" id="exampleFormControlTextarea1"
                                    rows="25">{{ $editing->content }}</textarea>
                                <br>
                                <button class="btn btn-primary" type="submit">نشر</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
