@extends('dash.layouts.header')
@section('content')

<div class="d-flex justify-content-end mb-2">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('تم انشاء التصنيف')}}
    </div>
    @endif
    <a href="{{route('category.create')}}" class="btn btn-danger float-left">اضف تصنيف</a>
</div>
    <div class="card card-defult">
        <div class="card card-header">
            التصنيفات
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>
                        الاسم
                    </th>
                </thead>
                <tbody>
                    @if (isset($categuries))
                    @foreach ($categuries as $categure)
                        <tr>
                            <th>{{$categure->name}}</th>
                        </tr>
                    @endforeach
                    @else 
                    حدث خطأ
                    @endif 
                </tbody>
            </table>
        </div>
    </div>
@endsection