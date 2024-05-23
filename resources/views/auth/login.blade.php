@extends('layouts.app')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="صورة الهاتف">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- مدخل البريد الإلكتروني -->
                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"  autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="form-label" for="form1Example13">عنوان البريد الإلكتروني</label>
                        </div>

                        <!-- مدخل كلمة المرور -->
                        <div class="form-outline mb-4">
                            <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                             autocomplete="current-password" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="form-label" for="form1Example23">كلمة المرور</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- خانة الاختيار -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />

                                <label class="form-check-label" for="form1Example3"> تذكرني </label>
                            </div>
                            <a href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a>
                        </div>

                        <!-- زر الإرسال -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">تسجيل الدخول</button>
                        <a href="{{route('register')}}" class="btn btn-primary btn-lg btn-block">تسجيل </a>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">أو</p>
                        </div>

                        <a href="{{ route('auth.google') }}" class="btn btn-danger btn-block"
                            type="submit">المتابعه بواسطة قوقل</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
