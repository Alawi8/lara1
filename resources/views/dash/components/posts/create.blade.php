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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body col-12">
                        <div class="row">
                            <form action="{{ route('dash.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div id="card-create" class="row text-center rounded">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">

                                            <input type="text" class="" name="title" value="{{old('title')}}" id=""
                                                aria-describedby="helpId" placeholder="اكتب العنوان هنا">
                                            <small id="helpId" class="form-control text-muted">اكتب عنوان المقاله
                                                هنا</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        {{-- date time article blade  --}}
                                        <input type="datetime" value="{{ date('Hms') }}" name="time" hidden>
                                        <input type="datetime" value="{{ date('Y-m-d h:m:s') }}" name="date" hidden >
                                        {{-- <input type="datetime" value="{{ Auth::user()->name }}"name="writer" hidden>  --}}
                                        {{-- end --}}

                                        <div>
                                            <input name="image" value="{{old('image')}}" class="@error('image') is-invalid @enderror" id="formFile" type="file" ><br>
                                            
 
                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
