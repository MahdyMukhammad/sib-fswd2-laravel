@extends('layout.main')

@section('maincontent')
    <div class="container-fluid px-4">
        <div class="card-header">
            <h1 class="mt-4">List User</h1>
        </div>
        <a class="btn btn-primary mb-3" href="{{ route('user.create') }}" role="button">Create New</a>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role User</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $listuser)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $listuser->role->name }}</td>
                                <td>{{ $listuser->name }}</td>
                                <td>{{ $listuser->email }}</td>
                                <td>{{ $listuser->phone }}</td>

                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
