<!-- Trang blade template của bạn -->

@extends('layout.master')

@section('title', 'Danh sách người dùng')

@section('content')
    <div class="container mt-4">
        <h1>Danh sách người dùng</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <!-- Duyệt qua danh sách người dùng -->
                @foreach ($data as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center">
            {{ $data->links() }}
        </div>
    </div>
@endsection
