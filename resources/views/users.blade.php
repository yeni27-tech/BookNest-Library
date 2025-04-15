@extends('admin.layout')
@section('content')
    <h2>Users List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nama_lengkap }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td><a href="#" class="btn btn-sm btn-warning">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection