{{-- @extends('dash.layouts.header')

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
        <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
            type='text/css' />
    </head>
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
                            <input type="datetime" value="{{ date('Hms') }}" name="time" hidden>
                            <input type="datetime" value="{{ date('Y-m-d h:m:s') }}" name="date" hidden>
                            <input type="text" value="{{ Auth::user()->name }}"name="writer" hidden>
                            <div id="card-create" class="row bg-light">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="mb-3">
                                        <input name="title" type="text" class="@error('title') is-invalid @enderror"
                                            value="{{ old('title') }}" aria-describedby="helpId"
                                            placeholder="اكتب العنوان هنا">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 ">
                                    <div>
                                        <input name="image" value="{{ old('image') }}"
                                            class="@error('image') is-invalid @enderror" id="formFile" type="file"
                                            placeholder="اختر الصوره"><br>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input name="exept" value="{{ old('exept') }}" type="text"
                                        placeholder="اكتب المقتطف هنا"
                                        class="col-lg-6 @error('exept') is-invalid @enderror">
                                </div>
                            </div>
                            <textarea name="content" value="{{ old('content') }}" id="example" rows="25">
                                {{ old('content') }}
                            </textarea>
                            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
                            </script>
                            <script>
                                var editor = new FroalaEditor('#example');
                            </script>
                            <br>
                            <button class="btn btn-primary" type="submit">نشــر</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('dash.layouts.header')
@section('content')
<div class="form-group">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" required>
        <option value="">Select a Category</option>
        @if (isset($categories))
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
            @if ($category->children)
                @foreach ($category->children as $child)
                    <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                @endforeach
            @endif
        @endforeach
        @endif
        
    </select>
</div>
    @endsection
