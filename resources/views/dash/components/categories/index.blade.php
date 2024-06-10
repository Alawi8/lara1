@extends('dash.layouts.header')
@section('content')

    <div class="d-flex justify-content-end mb-2 p-3">
        <a href="{{ route('category.create') }}" class="btn btn-danger float-left">اضف تصنيف</a>
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
                    <th>
                        التحكم
                    </th>
                </thead>
                <tbody>
                    @if (session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        <script>
                            
                            setTimeout(function() {
                                document.getElementById('success-alert').style.display = 'none';
                            }, 5000); 
                        </script>
                    @endif
                    @if (isset($categuries))
                        @foreach ($categuries as $categure)
                            <tr>
                                <td>{{ $categure->name }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $categure->id) }}" class="btn btn-primary">تعديل</a>
                                    <a href="{{ route('category.destroy', $categure->id) }}" class="btn btn-danger"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $categure->id }}').submit();">
                                        حذف
                                    </a>

                                    <form id="delete-form-{{ $categure->id }}"
                                        action="{{ route('category.destroy', $categure->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $categuries->links() }}
                        </div>
                    @else
                        خطأ
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
