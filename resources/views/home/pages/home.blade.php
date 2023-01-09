@extends('home.layouts.body')
@section('title')
  المقالات
@endsection
@section('content')

    <div class="container-fluid ">
        @if (isset($posts))
            <div class="row">
                @foreach ($posts as $post)
                   
                    <div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 ">
                        <a class="nav-link" href="{{ route('display', $post->title) }}" title="{{ $post->title }}">
                            <div id='card-posts-menu' class="card">
                                <img id="card-posts-menu-img" class="bg-dark"
                                    src="{{ asset('/assets/img/offers/' . $post->image_path) }}" class="card-img-top"
                                    alt="{{ $post->title }}">
                                <div class="card-body">
                                </div>
                                <h6>{{ $post->title }}</h6>
                                <small class="text-muted">
                                    @php
                                        $birth = $post->date; //تاريخ الولادة
                                        $death = date('ymd'); // تاريخ الوفاة
                                        
                                        $diff = abs(strtotime($death) - strtotime($birth)); // حساب الفرق الموجب بين التاريخين
                                        
                                        $years = floor($diff / (365 * 60 * 60 * 24)); // حساب عدد السنوات
                                        
                                        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24)); // حساب عدد الأشهر
                                        
                                        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24)); // حساب عدد الأيام
                                        ### A condition that the month value is greater than (0) ###
                                        if ($years == 0 and $months >> 0) {
                                            # code...
                                            printf('قبل %d شهر ', $months); // طباعة النتيجة
                                        }
                                        
                                        ### If it is wrong, print the value of the $years
                                        else {
                                            if ($years >> 0) {
                                                printf('قبل %d سنه', $years); // print $years
                                            } else {
                                                if ($years == 0 and $months == 0 and $days >> 0) {
                                                    # code...
                                                    printf('قبل %d يوم', $days); //print $days
                                                } else {
                                                    if ($years == 0 and $months == 0 and $days == 0) {
                                                        printf('تم انشاءه اليوم');
                                                    }
                                                }
                                            }
                                        }
                                    @endphp
                                </small>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-secondary text-center" role="alert">
                لم يتم العثور على مقالات
            </div>
        @endif

    </div>
@endsection
