@extends('dash.layouts.header')

@section('content')
        <div class="row">

            <div class="col-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body col-12">
                        <div class="row">
                            <form action="{{ route('dash.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="datetime" value="{{ date('Hms') }}" name="time" hidden>
                                <input type="datetime" value="{{ date('Y-m-d h:m:s') }}" name="date" hidden >
                                <input type="text" value="{{ Auth::user()->name }}"name="writer" hidden> 

                                <div id="card-create" class="row bg-light">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="mb-3">

                                            <input name="title" type="text" class="@error('title') is-invalid @enderror"  value="{{old('title')}}" 
                                                aria-describedby="helpId" placeholder="اكتب العنوان هنا">
                                                {{-- @error
                                                     <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 ">
                                        <div>
                                            <input name="image" value="{{old('image')}}" class="@error('image') is-invalid @enderror" id="formFile" type="file"
                                            placeholder="اختر الصوره" ><br>
                                        </div>

                                        <br>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <input name="exept" value="{{old('exept')}}" type="text" placeholder="اكتب المقتطف هنا" class="@error('exept') is-invalid @enderror">
                                    </div>
                                </div>

                                @include('dash.components.posts.CMS')<br>


                                <button class="btn btn-primary" type="submit">نشر</button>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>
@endsection
