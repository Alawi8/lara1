@extends('home.layouts.body')
@section('title')
    تسجيل الدخول
@endsection
@section('content')
    <!-- resources/views/auth/login.blade.php -->

    <body class="bg-light">

        <div class="container mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">تسجيل الدخول</h3>
                        </div>
                        <div class="card-body">
                            <!-- نموذج تسجيل الدخول -->
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <!-- حقل اسم المستخدم -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">البريد الالكتروني</label>
                                    <input type="text" class="form-control" id="username" name="email" autofocus
                                        required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <!-- حقل كلمة المرور -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control" id="password" name="password" autofocus
                                        required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif

                                <div class="mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">
                                            ذكرني
                                        </label>
                                    </div>
                                </div>
                                @if (Auth::check())
                                    <form method="POST" action="{{ route('login.custom') }}">
                                        @csrf

                                    </form>
                                @endif
                                <!-- زر تسجيل الدخول -->
                                <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
    @section('footer')
        @include('home.layouts.footer')
    @endsection
