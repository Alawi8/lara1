{{-- @extends('dash.layouts.header')
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
                                    date time article blade 
                                    <input type="datetime" value="{{ date('h:m') }}"name="time" hidden>
                                        <input type="datetime" value="{{ Auth::user()->name }}"name="writer" hidden>
                                    <div>
                                           <input type="text" name="image_path" value ="{{$editing->image_path}}" id="">
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <textarea name="content" id="textarea" rows="25">
                                    {{ $editing->content }}
                            </textarea>
                    
                            <small id="helpId" class="form-text text-muted">هنا محتوى المقاله </small>
                            <br>
                            <button class="btn btn-primary" type="submit">نشر</button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection --}}
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

                        <form class="needs-validation" novalidate action="{{ route('dash.update', $editing->id) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
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
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
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

                                <button class="w-100 btn btn-primary btn-lg" type="submit">أكمال النشر</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
