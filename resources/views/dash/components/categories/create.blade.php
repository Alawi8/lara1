@extends('dash.layouts.header')

@section('content')

    <div class="card card-defult">
        <div class="card card-header">
            اضافة تصنيفات
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
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger">
                        اضف التصنيف
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection