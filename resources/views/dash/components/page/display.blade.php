@extends('dash.layouts.header')
@section('title')
    عرض الصفحات
@endsection
@section('content')
    <style>
        .img-thumbnail {
            width: 10rem;
            height: 5rem;
        }
    </style>
    <div class="container p-3">
        @if (session('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>

            <script>
                // wait 5 minutes
                setTimeout(function() {
                    document.getElementById('success-alert').style.display = 'none';
                }, 5000);
            </script>

        @endif

        <a href="{{ route('pages.create') }}" class="btn btn-primary bg-gradient-primary ">اضافة صفحه</a>
        <table class="table">
            <thead>
                <tr class="text-dark ">
                    <th scope="col">العنوان</th>
                    <th class="col" scope="col">الحاله</th>
                    <th class="col" scope="col">التاريخ</th>
                    <th class="col" scope="col">اخر تحديث</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($pages))

                    @foreach ($pages as $page)
                        <tr>
                            
                            <td>{{ $page->title }}
                                <br>
                                <div class="d-flex p-2">
                                    <a href="{{route('pages.edit', $page->id)}}"
                                        class="btn badge rounded-pill text-bg-info">تعديل</a>

                                        <form action="{{ route('pages.destroy', $page->id) }}" method="post" id="deleteForm_{{ $page->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <!-- Modal -->
                                            <button class="btn badge rounded-pill text-bg-danger" type="button" onclick="confirmDelete({{ $page->id }})">حذف</button>
                                        </form>
                                        
                                        <script>
                                            function confirmDelete(id) {
                                                if (confirm('هل أنت متأكد من حذف هذه الصفحة؟')) {
                                                    document.getElementById('deleteForm_' + id).submit();
                                                }
                                            }
                                        </script>
                                </div>
                            </td>
                            <td><span class="badge rounded-pill text-bg-success">ONLINE</span></td>
                            <td>{{ $page->created_at }}</td>
                            <td>{{ $page->updated_at }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $pages->links() }}
        </div>
    </div>
@endsection
