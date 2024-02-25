<!-- resources/views/create-image.blade.php -->

@extends('dash.layouts.header')

@section('content')

    <!-- Modal gallery -->
    <section class="container">
        <h1>Create Image</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data" class="my-4">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">Select Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>


            <button type="submit" class="btn btn-primary">رفع</button>
        </form>
        <!-- Section: Images -->
        <section>
            <div class="row">
                @if (isset($images))
                    @foreach ($images as $image)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="{{ asset($image->path) }}" class="w-100" />
                                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
        
    </section>
    <!-- Modal gallery -->
    @endsection
