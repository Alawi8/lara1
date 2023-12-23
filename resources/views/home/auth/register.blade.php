@extends('home.layouts.body')
@section('title')تسجيل جديد@endsection
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">انشاء مستخدم</div>

                <div class="card-body">
                    <form action="{{ route('register.custom') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" name="name" required >
                        </div>
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif

                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الالكتروني</label>
                            <input type="email" class="form-control" id="email" name="email" required >
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                        <div class="mb-3">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" name="password" required >
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                        <div class="form-group mb-3">
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >ذكرني</label>                                    
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">انشاء</button>
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
