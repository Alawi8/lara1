<!-- resources/views/categories/create.blade.php -->

@extends('dash.layouts.header')  {{-- Assuming you have a main layout file --}}

@section('content')

    <div class="card">
        <div class="card-header">
            اضافة تصنيف
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item">
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input type="text" class="form-control" name="name" id="name">
                    <label for="title" class="form-label">الوصف</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">
                        اضف التصنيف
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
