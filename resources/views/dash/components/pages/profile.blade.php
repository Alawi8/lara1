@extends('dash.layouts.header')
@section('title')
صفحة المستخدم
@endsection
@section('content')
<div class="container-fluid py-4">
    {{-- <a href="{{ route('dash.create') }}" class="btn btn-danger bg-gradient-primary ">كتابة مقاله</a> --}}
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3"> تحسين SEO</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr class="bg-secondary">
                                    <th class="text-uppercase text-light text-xxs font-weight-bolder opacity-10">
                                        <p class="font-weight-bolder">العنوان</p>
                                    </th>
                                    <th class="text-uppercase text-light text-xxs font-weight-bolder opacity-10 ps-2">
                                        <p class="font-weight-bolder">الكاتب</p>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-light text-xxs font-weight-bolder opacity-10">
                                        <p class="font-weight-bolder">الحاله</p>
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-light text-xxs font-weight-bolder opacity-10">
                                        <p class="font-weight-bolder">التاريخ</p>
                                    </th>
                                    <th class="text-light opacity-7"> 

                                    </th>
                                </tr>
                            </thead>
                            @if (isset($posts))
                                @foreach ($posts as $post)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-0 py-0">
                                                    <div>
                                                        <img src="{{ asset('/assets/img/offers/' . $post->image_path) }}"
                                                            class="avatar avatar-sm  border-radius-lg" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 px-2 text-sm">{{ $post->title }}</h6>
                                                        <a  href="{{ route('dash.SeoUpdate', $post->id) }}" 
                                                            class="text-xs px-2 text- mb-0">
                                                            تحسين SEO</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $post->writer }}</p>
                                                <p class="text-xs text-secondary mb-0">Organization</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $post->time }}</span>
                                            </td>
                                       
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection