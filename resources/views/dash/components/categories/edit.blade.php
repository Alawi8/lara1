<!-- resources/views/categories/edit.blade.php -->

@extends('dash.layouts.header')
@section('content')

<div class="container mt-5">
    <div class="card card-defult">
        <div class="card-header">
            تعديل التصنيف
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">اسم التصنيف</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                    <label for="title" class="form-label">الوصـف</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
                </div>

                <!-- Add other form fields for editing category details here -->

                <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
            </form>
        </div>
    </div>
</div>

@endsection
