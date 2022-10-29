@extends('admin.layouts.head')

@section('index')

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

                <!-- Circle Buttons -->
                <div class="card shadow mb-12">

                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">display posts</h6>
                    </a>
                    <div class="collapse show" id="collapseCardExample">
                        <div class="card-body col-12">
                            <div class="row">
                                <form action="{{ route('posts.create') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    {{-- title create --}}
                                    <div class="mb-3">
                                        <label for="" class="form-label">العنوان :
                                        </label>
                                        <input type="text" class="card" name="title" id=""
                                            aria-describedby="helpId" >
                                            <small id="helpId" class="form-text text-muted">اكتب عنوان المقاله هنا</small>
                                    </div>
                                    {{-- end --}}

                                    {{-- date time article create  --}}
                                    <input type="datetime" value="{{ date('h:m') }}"name="time" hidden>
                                    <input type="datetime" value="{{ Auth::user()->name }}"name="writer" hidden>
                                    {{-- end --}}

                                    <div>
                                        <label for="formFileLg" class="form-label">plese select image</label>
                                        <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                                      </div>

                                    {{-- content create  --}}
                                    <div>
                                        <label>محتوى المقاله</label>
                                        <script>
                                            tinymce.init({
                                                selector: '#mytextarea',
                                                // selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                                                language: 'ar',
                                                // menubar: false,
                                                plugins: 'code table lists advtable',
                                                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
 
                                            });
                                        </script>
                                        <h1></h1>
                                        <textarea name="content" id="mytextarea"></textarea>
                                        <small id="helpId" class="form-text text-muted">هنا محتوى المقاله </small>
                                        <br>
                                        <button class="btn btn-primary" type="submit">نشر</button>
                                    </div>
                                    {{-- end --}}
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>

    </html>
@endsection
