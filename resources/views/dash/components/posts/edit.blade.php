@extends('dash.layouts.header')

@section('content')
    @extends('dash.layouts.header')

@section('content')

    <head>
        <meta charset="utf-8" />
        <!-- Firebase -->
        <script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>

        <!-- CodeMirror -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.17.0/codemirror.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.17.0/codemirror.css" />

        <!-- Firepad -->
        <link rel="stylesheet" href="https://firepad.io/releases/v1.5.9/firepad.css" />
        <script src="https://firepad.io/releases/v1.5.9/firepad.min.js"></script>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    </head>


    <!DOCTYPE html>
    <html lang="ar" dir="rtl">

    <body id="page-top">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="row">

            <div class="col-12">


                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body col-12">
                        <div class="row">
                            <form action="{{ route('dash.edit',) }}" method="post" enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">العنوان :
                                            </label><br>

                                            <input type="text" class="" name="{{posts->id}}" id=""
                                                aria-describedby="helpId">
                                            <small id="helpId" class="form-control text-muted">اكتب عنوان المقاله
                                                هنا</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        {{-- date time article blade  --}}
                                        <input type="datetime" value="{{ date('h:m') }}"name="time" hidden>
                                        <input type="datetime" value="{{ Auth::user()->name }}"name="writer" hidden>
                                        {{-- end --}}

                                        <div>
                                            <label for="formFileLg" class="form-label">الرجاء اختيار صوره</label>
                                            <br>
                                            <input name="image" class="" id="formFileLg" type="file"><br>
                                            <small id="helpId" class="form-text text-muted">ادرج الصوره هنا</small>
                                        </div>

                                        <br>
                                    </div>
                                </div>

                                @include('dash.components.posts.CMS')<br>


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

@endsection