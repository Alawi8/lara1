@extends('dash.layouts.header')

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
        <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
            type='text/css' />
    </head>
    <div class="row">
        <div class="col-12">
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body col-12">
                    <div class="row">

                        <form class="needs-validation" novalidate action="{{ route('posts.update', $editing->id) }}"
                            method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">العنوان</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="firstName" name="title" value="{{ $editing->title }}" required>
                                    <div class="invalid-feedback">
                                        حقل العنوان مطلوب
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">الوصف</label>
                                    <input type="text" class="form-control @error('exept') is-invalid @enderror"
                                        id="lastName" name="exept" placeholder="" value="{{ $editing->exept }}">
                                    <div class="invalid-feedback">
                                        حقل الوصف مطلوب
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="country" class="form-label">التصنيف</label>
                                    <select class="form-select" id="country" required>
                                        <option value="f">f</option>
                                    </select>
                                </div>


                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">الوصف</label>
                                    <input type="text" class="form-control @error('exept') is-invalid @enderror"
                                        id="lastName" name="image_path" placeholder="" value="{{ $editing->image_path }}">
                                    <div class="invalid-feedback">
                                        حقل الوصف مطلوب
                                    </div>
                                </div>


                                <hr class="my-4">
                                <div class="form-control @error('content') is-invalid @enderror">
                                    <textarea name="content" value="{{ old('content') }}" id="example" rows="25"
                                        class="form-control @error('content') is-invalid @enderror">
                                        {{ $editing->content }}
                               </textarea>
                                    <div class="invalid-feedback">
                                        حقل المحتوى مطلوب
                                    </div>
                                </div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
                                </script>
                                <script>
                                    var editor = new FroalaEditor('#example');
                                </script>

                                <button class="w-100 btn btn-primary btn-lg" type="submit">أكمال النشر
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
