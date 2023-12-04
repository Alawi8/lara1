<!-- resources/views/users/index.blade.php -->

@extends('dash.layouts.header') <!-- Assuming you have a master layout -->

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-3">Users List</h2>

        @if($users->count() > 0)
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <!-- Add more columns if needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <!-- Add more columns if needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="alert alert-info">No users found.</p>
        @endif
    </div>
@endsection
