@extends('dash.layouts.header')
@section('title')
تعديل المقاله
@endsection
@section('content')
    <div class="row">

        <div class="col-12">

            <div class="collapse show" id="collapseCardExample">
                <div class="card-body col-12">
                    <div class="row">
                        <form action="{{ route('dash.update', $editing->id) }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">العنوان :
                                        </label><br>

                                        <input type="text" class="" name="title" value="{{ $editing->title }}"
                                            id="" aria-describedby="helpId">
                                        <small id="helpId" class="form-control text-muted">اكتب عنوان المقاله
                                            هنا</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    {{-- date time article blade  --}}
                                    {{-- <input type="datetime" value="{{ date('h:m') }}"name="time" hidden>
                                        <input type="datetime" value="{{ Auth::user()->name }}"name="writer" hidden> --}}
                                    {{-- end --}}

                                    <div>
                                        {{-- <label for="formFileLg" class="form-label">الرجاء اختيار صوره</label>
                                            <br>
                                            <input value="" name="image" class="" id="formFileLg"
                                                type="file"><br>
                                            <small id="helpId" class="form-text text-muted">ادرج الصوره هنا</small> --}}
                                    </div>

                                    <br>
                                </div>
                            </div>


                            <textarea name="content" id="textarea" rows="25">
                                    {{ $editing->content }}
                            </textarea>
                            <script>
                                tinymce.init({
                                    selector: '#textarea',
                                    language: 'ar',
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
                                    toolbar: 'undo redo  | bold italic underline strikethrough | link image media table mergetags |  code | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    mergetags_list: [{
                                            value: 'First.Name',
                                            title: 'First Name'
                                        },
                                        {
                                            value: 'Email',
                                            title: 'Email'
                                        },
                                    ],
                                });
                            </script>
                            <small id="helpId" class="form-text text-muted">هنا محتوى المقاله </small>
                            <br>


                            <button class="btn btn-primary" type="submit">نشر</button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
