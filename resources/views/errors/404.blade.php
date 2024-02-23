@extends('home.layouts.body')
@section('title', '404')
    <style>
        h1{
            color:#263238;
        }
    </style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12 mt-5 text-center mt-5 mb-5">
            <h1 class="display-4">404 - لا يوجد صفحة</h1>
            <p class="display-">عذرًا، الصفحة التي تبحث عنها غير موجودة!</p>
            <div class="mx-auto " style="width: fit-content;">
                <a href="{{route('home')}}"  >
                    <div class="btn btn-lg text-light " style="background-color: #263238">
                        انتقل للصفحه الرئيسيه
                    </div>

                </a>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <img class="img-fluid" src="{{asset('assets/img/Group 307.png')}}" alt="صورة تعريفية">
        </div>
    </div>
</div>

@endsection
