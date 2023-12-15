@extends('dash.layouts.header')

@section('content')

    <div class="">
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
            <div class="col-lg-12 col-md-8">
                <div class="card">
                    <section>
                        <div class="container py-5">
                            <div class="row">
                                <div class="col">
                                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">الملف الشخصي للمستخدم
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            @foreach ($settings as $item)
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4 bg-light">
                                            <div class="card-body text-center">
                                                <img src="{{$item->icon_url}}"
                                                    alt="الصورة الشخصية" class="rounded-circle img-fluid"
                                                    style="width: 150px;">
                                                <h5 class="my-3"></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card mb-4 bg-light">
                                            <div class="card-body">
                                                <form action="{{route('settings.update',1)}}" method="post">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">الاسم الكامل</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="site_name"
                                                                value="{{ $item->site_name }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">البريد الإلكتروني</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="file" name="picture" value="{{$item->icon_url}}" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">

                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">الهاتف</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="tel" name="phone" value="{{ $item->phone }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">الجوال</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="tel" name="mobile" value="{{ $item->mobile }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">العنوان</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <textarea name="about" class="form-control">{{ $item->about }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-sm-3"></div>
                                                        <div class="col-sm-9">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">تحديث الملف
                                                        الشخصي</button>
                                                </form>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
