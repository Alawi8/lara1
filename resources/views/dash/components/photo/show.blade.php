<!-- resources/views/create-image.blade.php -->

@extends('dash.layouts.header')

@section('content')
    <div class="container mt-5">
        <h1>Create Image</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">Select Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="caption" class="form-label">Caption (optional)</label>
                <input type="text" class="form-control" id="caption" name="caption" maxlength="255">
            </div>

            <button type="submit" class="btn btn-primary">Upload Image</button>
        </form>
    </div>
@endsection
