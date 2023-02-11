@extends('home.layouts.body')
@section('title')
تسجيل الدخول
@endsection
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">دخول</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">

                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control"
                                    name="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password" class="form-control"
                                            name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> ذكرني
                                            </label>
                                        </div>
                                    </div>
                                    @if (Auth::check())
                                    <form method="POST" action="{{ route('login.custom') }}">
                                        @csrf
                                        <a href="#">ffffffffff</a>
                                    </form>
                                    @endif
    
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">دخول</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    @include('home.layouts.footer')
@endsection
